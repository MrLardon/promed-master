<?php
include_once "bd.inc.php";
include VUE_DIR."inscription.html";

$sets =[
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["rue"],
    $_POST['date_naissance'],
    $_POST["mail"],
    $_POST["telephone"],
    $_POST["num_secu"],
    $_POST["num_rue"],
    $_POST["code_postal"],
    $_POST["ville"],
    $_POST["password"],
    $_POST["nvx_client"],

];




if (isset($_POST)){

$query = getPdo()->prepare("INSERT INTO patient (nom, prenom, rue, date_naissance, mail, telephone, num_secu, num_rue, code_postal, ville, password, nvx_client)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
$query->execute($sets);


}