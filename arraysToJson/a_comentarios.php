<?php

require_once("../includes/funciones.php");

$a_comentarios =
  array(

    1 => array(
      "id_producto" => 1,
      "fecha" => "2020-10-15 16:50",
      "comentario" => "El buzo es re comodo",
      "correo" => "carlos-jose@gmail.com",
      "valoracion" => 5
    ),

    2 => array(
      "id_producto" => 1,
      "fecha" => "2020-10-17 18:00",
      "comentario" => "El buzo se decoloro",
      "correo" => "reinaldo@gmail.com",
      "valoracion" => 1
    ),

    3 => array(
      "id_producto" => 3,
      "fecha" => "2020-10-21 09:00",
      "comentario" => "Me encanto",
      "correo" => "pirulo@gmail.com",
      "valoracion" => 5
    )
  );

GrabarArrayArchivo($a_comentarios, "/json", "comentarios.json");
// MostarArray($a_comentarios);

// $j_comentarios = file_get_contents("json/comentarios.json");

// $a_comen = json_decode($j_comentarios, true);

// GrabarArrayArchivo($a_comentarios, "json", "comentarios.json");
// MostarArray($a_comentarios);


?>

