

<?php

/**
 * traitement des rdv des praticiens
 */
 
$query = getPdo()->prepare("SELECT * FROM rdv");
$query->execute();

$rdvtab=null;

while($rdv = $query->Fetch(PDO::FETCH_OBJ)){
    //print_r($rdv);
    // $id=$rdv->id;
    // $conclusion = $rdv->conclusion;
    // $date = $rdv->date;
    // $heure = $rdv->date_naissance;
    // $id_patient = $rdv->rue;
    // $id_praticien = $rdv->mail;
    // $id_prestation = $rdv->telephone;
    // $rdv_annule = $rdv->num_secu;
    // $rdv_effectue = $rdv->num_rue;
    // $rdv_paye = $rdv->code_postal;
    $rdvtab.='<tbody><tr>';
    $rdvtab.='<td>'.  $rdv->date.'</td>';
    $rdvtab.='<td>'.  $rdv->heure.'</td>';
    $rdvtab.='<td>'.  $rdv->conclusion.'</td>';
   
    $rdvtab.='</tr></tbody>';

   //die($rdvtab);
}

//die($rdvtab);
