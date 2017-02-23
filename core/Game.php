<?php
final class Game
{
    public function creationPersonnage($nom, $sexe, $race, $classe, $user_id = 1)
    {
        // On récupère l'objet database
        $db = Database::getInstance();


         $q = $db->prepare("INSERT INTO personnage (`nom`, `pa`, `stats`, `race`, `classe`, `user_id`, `sexe`)
                            VALUES ( :nom, :pa, :stats, :race, :classe, :user_id, :sexe)");
         $q->bindValue(":nom", trim(strtolower($nom)), PDO::PARAM_STR);
         $q->bindValue(":pa", 2,PDO::PARAM_INT);
         $q->bindValue(":stats", 1, PDO::PARAM_INT);
         $q->bindValue(":race", $race, PDO::PARAM_INT);
         $q->bindValue(":classe", $classe, PDO::PARAM_INT);
         $q->bindValue(":user_id", $user_id, PDO::PARAM_INT);
         $q->bindValue(":sexe", $sexe, PDO::PARAM_INT);

         $r = $q->execute();
         return $r;
    }
}
