<?php
include "getRacine.php";

include_once CONTROL_DIR . "controleurPrincipal.php";
//include_once MODELE_DIR . "connexion.inc.php"; // pour pouvoir utiliser isLoggedOn()
//include_once VUE_DIR . "vueAuthentification.html.php";
include_once MODELE_DIR.'bd.inc.php';

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}


$fichier = controleurPrincipal($action);

//die( CONTROL_DIR . $fichier );

include "$fichier";
