<?php

require_once("../includes/funciones.php");
$a_marca = array(

  1 => array("id_marca"=> 1, "nombre" => "NIKE"),
  2 => array("id_marca"=> 2,"nombre" => "ADIDAS"),
  3 => array("id_marca"=> 3,"nombre" => "PUMA"),
  4 => array("id_marca"=> 4,"nombre" => "FILA"),
  5 => array("id_marca"=> 5,"nombre" => "CONVERSE")

);


GrabarArrayArchivo($a_marca, "../json", "marca.json");
MostarArray($a_marca);

?>
