<?php
include MODELE_DIR."edit_praticien.inc.php";



    if (!empty($_POST)) {
        echo 'Compte praticien crée avec succès';
        header('Location: ?action=connexion');
        exit;
    }else{
        echo "Un problème est survenu lors de l'inscription";

    }

