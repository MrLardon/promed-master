<?php
require  VUE_DIR.'edit_prestation.html'
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Acte : '.$_POST["acte"].'<br>';
            echo 'Durée : ' .$_POST["duree"].'<br>';
            echo 'Tarif : ' .$_POST["tarif"].'<br>';
            addPrestation();
        ?>

        <?php

           // die(MODELE_DIR.'bd.inc.php');

            
            function addPrestation(){
            $acte=$_POST["acte"];
            $duree=$_POST["duree"];
            $tarif=$_POST["tarif"];
                try {
                    $cnx = getPdo();
                    $req = $cnx -> prepare("insert into prestation (id_praticien,acte, duree,tarif) values('3', '$acte','$duree', '$tarif')");
                    $req -> execute();
                } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage();
                    die();
                }
            }
        ?>

        <?php
            // function getPdo(){
            //     $login = 'dev';
            //     $mdp = 'SuperUser@sio56';
            //     $bd = 'gr1';
            //     $serveur = '172.16.120.2';
            //     $port = "3307";

            //     try {
            //         $inst = new PDO("mysql:host=$serveur;port=$port;dbname=$bd", $login, $mdp,);
            //         $inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //         return $inst;
            //     } catch (PDOException $e) {
            //         die('Erreur : ' . $e->getMessage());
            //     }
            // }
        ?>
    </body>
</html>
