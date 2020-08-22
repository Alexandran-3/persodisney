<?php
require_once 'database.php';


$req = $bdd->prepare(' SELECT *
         FROM personnage
         ');
$req->execute();
$donnees = $req->fetch();



