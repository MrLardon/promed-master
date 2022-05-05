<?php
include MODELE_DIR.'edit_praticien.inc.php';



    if (!empty($_POST)) {
        echo 'Compte praticien crée ';
    }

    if (!empty($_GET['action'])){
        header('Location: index.php?action=connexion');
        exit;
    } else {
        header('Location: index.php?action=defaut');
        exit;
    }
