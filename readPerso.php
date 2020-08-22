<?php
require_once 'database.php';


$req = $bdd->prepare(' SELECT *
         FROM personnage
         ');
$req->execute();
$data = $req->fetch(); ?>

<div>
    <div>
    <?php while ($data = $req->fetch()) : ?>
        Nom du personnage :
        <?php echo $data['name']; ?>
    </div>

    <div>Animation :
        <?php echo $data['animation']; ?>
    </div>

    <div>
        Description :
        <?php echo $data['description']; ?>
    </div>
    <hr>
   

 
<?php endwhile; ?>
</div>



