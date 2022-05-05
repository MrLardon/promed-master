<?php

$query = getPdo()->prepare("SELECT * FROM patient WHERE id=1");
$query->execute();


$profil = $query->Fetch(PDO::FETCH_OBJ);
    $nom = $profil->nom;
    $prenom = $profil->prenom;
    $date_naissance = $profil->date_naissance;
    $rue = $profil->rue;
    $mail = $profil->mail;
    $tel = $profil->telephone;
    $numsecu = $profil->num_secu;
    $num_rue = $profil->num_rue;
    $cp = $profil->code_postal;
    $ville = $profil->ville;




include VUE_DIR . 'profilpatient.html';
