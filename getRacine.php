<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$racine = dirname(__FILE__);

define("ROOT", __DIR__ );

define("CONTROL_DIR", ROOT . '/controleur/' );
define("CONTROL_PATIENT", CONTROL_DIR . 'patient/' );
define("CONTROL_PRATICIEN", CONTROL_DIR . 'praticien/' );

define("MODELE_DIR", ROOT . '/modele/');
define("VUE_DIR" , ROOT . '/vue/');

define("ASSETS_DIR", ROOT .'/assets/');