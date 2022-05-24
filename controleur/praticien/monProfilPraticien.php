<?php
// if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
//     $racine = "..";
// }
// include_once "$racine/modele/connexion.inc.php";
// include_once "$racine/modele/bd.utilisateur.inc.php";
// include_once "$racine/modele/bd.typecuisine.inc.php";
// include_once "$racine/modele/bd.resto.inc.php";

// creation du menu burger
$mediConcept = array();
$mediConcept[] = array("url" => "./?action=profil", "label" => "Consulter mon profil");
$mediConcept[] = array("url" => "./?action=updProfil", "label" => "Modifier mon profil");


// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
if (isLoggedOn()) {
    $mailU = getMailULoggedOn();
    $util = getUtilisateurByMailU($mailU);

    // $mesTypeCuisineAimes = getTypesCuisinePreferesByMailU($mailU);
    // traitement si necessaire des donnees recuperees


    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Mon profil";
    include "$racine/vue/entete.html";
    include "$racine/vue/vueMonProfil.php";
    include "$racine/vue/pied.html";
} else {
    $titre = "Mon profil";
    include "$racine/vue/entete.html";
    include "$racine/vue/pied.html";
}
