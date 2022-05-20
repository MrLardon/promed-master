<?php
session_start();



$query = getPdo()->prepare("SELECT p.*, s.metier FROM praticien p join specialite s on p.id_specialite=s.id WHERE p.id=:id");
$query->execute([':id'=>$_SESSION['id']]);


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



$queryrdv = getPdo()->prepare("SELECT pa.nom, pa.prenom, pa.telephone, date, plages FROM rdv r INNER JOIN Plage p ON r.plage = p.id INNER JOIN praticien pr on pr.id=r.id_praticien INNER JOIN patient pa on pa.id=r.id_patient WHERE pr.id = 2 ");
$queryrdv->execute();

$rdvtab=null;

while($rdv = $queryrdv->Fetch(PDO::FETCH_OBJ)){

    $rdvtab.='<tbody><tr>';
    $rdvtab.='<td>'.  $rdv->plages.'</td>';
    $rdvtab.='<td>'.  $rdv->nom.'</td>';
    $rdvtab.='<td>'.  $rdv->prenom.'</td>';
  //  $rdvtab.='<td>'.  $rdv->prochainrdv.'</td>';
    
    $rdvtab.='</tr></tbody>';

    //die($rdvtab);
}    


include VUE_DIR . 'profilpraticien.html';
