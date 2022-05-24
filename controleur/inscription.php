<?php

$role = filter_input(INPUT_GET, 'type');
var_dump($role);
exit;

if ($_GET[$type]==0){
    header('Location: ../../?action=inscription');
}else{
    header('Location: ../../?action=inscriptionPro');
}


