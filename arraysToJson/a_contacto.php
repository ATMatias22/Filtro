<?php

require_once("../includes/funciones.php"); 

$a_contacto= array(

 );

GrabarArrayArchivo($a_contacto, "../json", "contacto.json");

MostarArray($a_contacto);

?>