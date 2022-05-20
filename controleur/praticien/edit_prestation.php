<?php
include   MODELE_DIR.'edit_prestation.inc.php';


if (!empty($_POST)) {
    echo 'Nouvelle prestation crée avec succès';
    header('Location: ?action=comptepro');
    exit;
}else{
    echo "Un problème est survenu lors de la création de la prestation,";

}








