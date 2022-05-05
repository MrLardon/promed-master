<?php
include MODELE_DIR."edit_patient.inc.php";


  /*  $sets =[
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "date_naissance" => $_POST["date_naissance"],
        "rue" => $_POST["rue"],
        "mail" => $_POST["mail"],
        "telephone" => $_POST["telephone"],
        "num_secu" => $_POST["num_secu"],
        "num_rue" => $_POST["num_rue"],
        "code_postal" => $_POST["code_postal"],
        "ville" => $_POST["ville"],
        "password" => $_POST["password"],
        //nvx_client ?
    ]; */

if (!empty($_POST)) {
    echo 'Compte patient crée ';
}

if (!empty($_GET['action'])){
    header('Location: index.php?action=connexion');
    exit;
} else {
    header('Location: index.php?action=defaut');
    exit;
}