<?php

require_once("../includes/funciones.php"); 

$a_subcategoria= array(
   1=>array("id_marca"=> null,"id_subcategoria"=>1,"id_categoria"=>1,"nombre"=>"Buzos"),
   2=>array("id_marca"=> null,"id_subcategoria"=>2,"id_categoria"=>1,"nombre"=>"Remeras"),
   3=>array("id_marca"=> null,"id_subcategoria"=>3,"id_categoria"=>1,"nombre"=>"Pantalones"),
   4=>array("id_marca"=> null,"id_subcategoria"=>4,"id_categoria"=>2,"nombre"=>"Zapatillas Mujer"),
   5=>array("id_marca"=> null,"id_subcategoria"=>5,"id_categoria"=>2,"nombre"=>"Zapatillas Hombre"),
   6=>array("id_marca"=> null,"id_subcategoria"=>6,"id_categoria"=>2,"nombre"=>"Zapatillas Infantiles"),
   7=>array("id_marca"=> 1,"id_subcategoria"=>null,"id_categoria"=>3,"nombre"=>"NIKE"),
   8=>array("id_marca"=> 2,"id_subcategoria"=>null,"id_categoria"=>3,"nombre"=>"ADIDAS"),
   9=>array("id_marca"=> 3,"id_subcategoria"=>null,"id_categoria"=>3,"nombre"=>"PUMA"),
   10=>array("id_marca"=> 4,"id_subcategoria"=>null,"id_categoria"=>3,"nombre"=>"FILA"),
   11=>array("id_marca"=> 5,"id_subcategoria"=>null,"id_categoria"=>3,"nombre"=>"CONVERSE"),

 );

GrabarArrayArchivo($a_subcategoria, "../json", "subcategoria.json");

MostarArray($a_subcategoria);

?>