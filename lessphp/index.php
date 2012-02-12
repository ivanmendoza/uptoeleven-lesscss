<?php
require 'lessc.inc.php';

$carpeta_entrada="../stylesheets/";
$carpeta_salida="../css/";
$stylesheets=array("style");

try {
	foreach($stylesheets as $stylesheet){
		lessc::ccompile($carpeta_entrada.$stylesheet.'.less', $carpeta_salida.$stylesheet.'.css');
	}
}catch (exception $ex) {
    exit('lessc fatal error:<br />'.$ex->getMessage());
}
?>
