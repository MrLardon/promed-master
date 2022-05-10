<?php

include_once "bd.utilisateur.inc.php";
include VUE_DIR."connexion.html";

$mailU = $_POST["mail"];
$mdpU = $_POST["password"];
print_r($mailU);

//print_r($mdpU);

$sets=[
    $_POST["mail"],
    $_POST["password"],
];

if (isset($_POST)){
    $query = getPdo()->prepare("SELECT `id`, `email`, `password`, `praticien`, `id_patient`, `id_praticien` FROM `utilisateur` WHERE `email`=:mel AND `password`=:mdp");
    $query->execute([':mel'=>$_POST["mail"],':mdp'=>$_POST["password"]]);
    if($p = $query->fetch()){
        print_r("OUI");
        do{
            if ($p['praticien']){
                header('Location: ?action=inscription');
            }else{

            }
            print_r($p);
            print_r($p['email']);
        }while ($p = $query->fetch());
    }else{
        print_r("NON");
    }
}

?>
