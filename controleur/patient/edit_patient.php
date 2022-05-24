<?php
include MODELE_DIR."edit_patient.inc.php";




if (!empty($_POST)) {
    echo 'Compte patient crée ';
     header('Location: ?action=connexion');
        exit;
}else{
    echo "Un problème est survenu lors de l'inscription";

}

