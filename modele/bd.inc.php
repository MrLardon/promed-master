<?php
    function getPdo(){
        $login = 'dev';
        $mdp = 'SuperUser@sio56';
        $bd = 'gr1';
        $serveur = '172.16.120.2';
        $port = "3307";

        try {
            $inst = new PDO("mysql:host=$serveur;port=$port;dbname=$bd", $login, $mdp,);
            $inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $inst;
        } catch (PDOException $e) {
            print "Erreur de connexion PDO ";
            die('Erreur : ' . $e->getMessage());
        }
    }


?>
