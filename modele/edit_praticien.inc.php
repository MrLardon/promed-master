<?php
include_once "bd.inc.php";
include VUE_DIR."nouveauPraticien.html";

$sets =[
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["rue"],
    $_POST["mail"],
    $_POST["specialite"],
    $_POST["num_tel"],
    $_POST["num_rpps"],
    $_POST["num_rue"],
    $_POST["code_postal"],
    $_POST["ville"],
    $_POST["tele_consult"],
    $_POST["password"],
];

if (isset($_POST)) {

    $query = getPdo()->prepare("INSERT INTO praticien (nom, prenom, rue, mail, specialite, num_tel, num_rpps, num_rue, code_postal, ville, tele_consult, password)  VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $query->execute($sets);
  //  foreach ($query as $row) {
  //      print_r($row);
  //  }

}