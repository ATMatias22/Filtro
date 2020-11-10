<?php

require_once("../includes/funciones.php"); 

$a_categoria= array(
   1=>array("id_categoria"=>1,"nombre"=>"Indumentaria"),
   2=>array("id_categoria"=>2,"nombre"=>"Zapatillas"),
   3=>array("id_categoria"=>3,"nombre"=>"Marcas"),



 );

GrabarArrayArchivo($a_categoria, "../json", "categoria.json");

MostarArray($a_categoria);

?>