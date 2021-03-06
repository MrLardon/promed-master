<?php
session_start();

$query = getPdo()->prepare("SELECT * FROM patient WHERE id=:id");

$query->execute([':id'=>$_SESSION['id']]);


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



$queryrdv = getPdo()->prepare("SELECT s.metier,pr.nom, date, conclusion,plages FROM rdv r INNER JOIN Plage p ON r.plage = p.id inner join praticien pr on pr.id=r.id_praticien INNER JOIN specialite s ON s.id=pr.id_specialite INNER JOIN utilisateur u on u.id_patient=r.id_patient WHERE u.id =:id ORDER BY r.date");
$queryrdv->execute([':id'=>$_SESSION['id']]);

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

include VUE_DIR . 'profilpatient.html';
