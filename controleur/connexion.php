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
<<<<<<< HEAD
header('Location: ../../?action=compte');
=======
//header('Location: ../../?action=compte');
>>>>>>> master
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
//login($mailU, $mdpU);

//if (isLoggedOn()) { // si l'utilisateur est connecté on redirige vers le controleur monProfil
   // include "../controleur/patient/monProfilPatient.php";
//} else { // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    //$titre = "authentification";

   // include VUE_DIR . "vueAuthentification.html.php";

//}
