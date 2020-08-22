<?php

/*CONNEXION A LA BASE DE DONNEES */

            $servname = 'localhost';
            $dbname = 'disney';
            $user = 'root';
            $pass = '';
            
            try{
                $bdd = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }

            