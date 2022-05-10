<?php

$query = getPdo()->prepare("SELECT p.*, s.metier FROM praticien p join specialite s on p.id_specialite=s.id WHERE p.id=2");
$query->execute();


$profil = $query->Fetch(PDO::FETCH_OBJ);
    $nom = $profil->nom;
    $prenom = $profil->prenom;
    $specialite = $profil->metier;
    $rue = $profil->rue;
    $mail = $profil->mail;
    $num_tel = $profil->num_tel;
    $num_rpps = $profil->num_rpps;
    $num_rue = $profil->num_rue;
    $cp = $profil->code_postal;
    $ville = $profil->ville;



$queryrdv = getPdo()->prepare("SELECT s.metier,pr.nom, date, conclusion,plages FROM rdv r INNER JOIN Plage p ON r.plage = p.id inner join praticien pr on pr.id=r.id_praticien INNER JOIN specialite s ON s.id=pr.id_specialite");
$queryrdv->execute();

$rdvtab=null;

while($rdv = $queryrdv->Fetch(PDO::FETCH_OBJ)){

    $rdvtab.='<tbody><tr>';
    $rdvtab.='<td>'.  $rdv->metier.'</td>';
    $rdvtab.='<td>'.  $rdv->nom.'</td>';
    $rdvtab.='<td>'.  $rdv->date.'</td>';
    $rdvtab.='<td>'.  $rdv->plages.'</td>';
    $rdvtab.='<td>'.  $rdv->conclusion.'</td>';
    
    $rdvtab.='</tr></tbody>';

    //die($rdvtab);
}    


include VUE_DIR . 'profilpraticien.html';
