<?php

class Users
{
    public static function loginOrCreate($mail, $password)
    {
         // On récupère l'objet database
         $db = Database::getInstance();
         // On cherche si le nom d'utilisateur existe
         $q = $db->prepare("SELECT id FROM user WHERE mail = :mail");
         $q->bindValue(":mail", strtolower($mail), PDO::PARAM_STR);
         $q->execute();
         $u = $q->fetch();

         // Si il n'existe pas, on le crée
         if (empty($u)) {
              $q = $db->prepare("INSERT INTO user (`mail`, `password`, `pseudo`, `last_log`) VALUES (:mail, :password, '', :currentTime)");
              $q->bindValue(":mail", trim(strtolower($mail)), PDO::PARAM_STR);
              $q->bindValue(":password", sha1($password), PDO::PARAM_STR);
              $q->bindValue(":currentTime", time(), PDO::PARAM_INT);
              $q->execute();
          }
          // Dans tous les cas on check le mdp
          $q = $db->prepare("SELECT id, mail, pseudo, last_log FROM user WHERE mail = :mail AND password = :password");
          $q->bindValue(":mail", strtolower($mail), PDO::PARAM_STR);
          $q->bindValue(":password", sha1($password), PDO::PARAM_STR);
          $q->execute();
          $u = $q->fetch();

          // Si l'user et le mdp correspondent, on met à jour le temps de dernière connexion
          // et on renvoi les infos concernant l'utilisateur
          if (!empty($u)) {
               self::updateLastLogin($u->id);
               return array('id' => $u->id, 'mail' => ucfirst($u->mail));
          }

          // Dans les autres cas on renvoi null
          return null;
     }

     public static function updateLastLogin($uid) {
          $db = Database::getInstance();

          $q = $db->prepare("UPDATE user SET last_log=:currentTime WHERE id=:id");
          $q->bindValue(":id", $uid, PDO::PARAM_INT);
          $q->bindValue(":currentTime", time(), PDO::PARAM_INT);
          $q->execute();
     }
}
