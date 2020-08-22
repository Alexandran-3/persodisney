<?php 

require_once 'database.php';

$name = trim(strip_tags($_POST['name']));
$animation = trim(strip_tags($_POST['animation']));
$description = trim(strip_tags($_POST['description']));

//VALIDATION

if (strlen($name) < 3) {
    echo 'name';
} elseif (strlen($animation) < 5) {
    echo 'animation';
} elseif (strlen($description) <= 20) {
    echo 'description';

	


} else {

        $req = $bdd->query("
        INSERT INTO personnage (name, animation, description) 
        VALUES ('$name', '$animation', '$description')");

       echo 'true';

      

    }
    


