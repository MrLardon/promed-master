<?php
session_start();


include   VUE_DIR.'edit_prestation.html';
    $sets=[
    $_SESSION['id'],
    $_POST["acte"],
    $_POST["duree"],
    $_POST["tarif"],
    ];


        $cnx = getPdo();
        $req = $cnx -> prepare("INSERT INTO prestation (id_utilisateur,acte, duree,tarif) values(?, ?, ?, ?)");
        $req -> execute($sets);


