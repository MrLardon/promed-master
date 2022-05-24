<?php

include_once MODELE_DIR."connexion.inc.php";

// creation du menu promed
//$promed = array();
//$promed[] = array("url" => "./?action=connexion", "label" => "Connexion");
//$promed[] = array("url" => "./?action=inscription", "label" => "Inscription");

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["password"])) {
    $mailU = $_POST["mail"];
    $mdpU = $_POST["password"];
} else {
    $mailU = "";
    $mdpU = "";
}
