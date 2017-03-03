<?php
require_once ("Database.php");

require_once ("Observable.php");
require_once ("iRace.php");
require_once ("iClasse.php");
require_once ("Personnage.php");
require_once ("Stuff.php");

require_once ("Classes/Guerrier.php");
require_once ("Classes/Mage.php");
require_once ("Classes/Palade.php");
require_once ("Classes/Archer.php");
require_once ("Classes/Cretin.php");

require_once ("Races/Orc.php");
require_once ("Races/Nain.php");
require_once ("Races/Lapin.php");
require_once ("Races/Humain.php");
require_once ("Races/Elfe.php");

//require_once (".php");

$p = new Personnage("kjh", new Orc(), new Guerrier());
echo $p->getRace()->getNom();
$p->Attack();
$p->Move();
