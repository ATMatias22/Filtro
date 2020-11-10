<?php

require_once('../includes/funciones.php');


$a_producto =
    array(
        1 => array(
            'id_producto' => 1,
            "nombre" => "buzo",
            "descripcion" => "Haz que sea memorable con este buzo con capucha de Nike Sportswear Heritage, un look atemporal confeccionado con un suave tejido de felpa semi cepillado. Posee un corte estándar.
                       <br> Capucha con cordón de ajuste, bolsillo canguro cintura y puños elastizados.
                       <br> Presenta el logo Nike estampado.",
            "id_marca" => 1,
            "precio" => 4000,
            "id_subcategoria"  => 1,
        ),

        2 => array(
            'id_producto' => 2,
            "nombre" => "buzo",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 1, "precio" => 4000,
            "id_subcategoria"  => 1,
        ),

        3 => array(
            'id_producto' => 3,
            "nombre" => "buzo",
            "descripcion" => "buzo blanco y rosa",
            "id_marca" => 1,
            "precio" => 4000,
            "id_subcategoria"  => 1,
        ),

        4 => array(
            'id_producto' => 4,
            "nombre" => "Zapatilla Mujer",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 1,
            "precio" => 4000,
            "id_subcategoria"  => 4,
        ),
        5 => array(
            'id_producto' => 5,
            "nombre" => "Zapatilla Mujer",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 4,
        ),
        6 => array(
            'id_producto' => 6,
            "nombre" => "Zapatilla Mujer",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 3,
            "precio" => 4000,
            "id_subcategoria"  => 4,
        ),
        7 => array(
            'id_producto' => 7,
            "nombre" => "Zapatilla Mujer",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 3,
            "precio" => 4000,
            "id_subcategoria"  => 4,
        ),
        8 => array(
            'id_producto' => 8,
            "nombre" => "Zapatilla Hombre",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 5,
        ),
        9 => array(
            'id_producto' => 9,
            "nombre" => "Zapatilla Hombre",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 5,
        ),
        10 => array(
            'id_producto' => 10,
            "nombre" => "Zapatilla Hombre",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 4,
            "precio" => 4000,
            "id_subcategoria"  => 5,
        ),
        11 => array(
            'id_producto' => 11,
            "nombre" => "Zapatilla Infantil",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 6,
        ),
        12 => array(
            'id_producto' => 12,
            "nombre" => "Zapatilla Infantil",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 6,
        ),
        13 => array(
            'id_producto' => 13,
            "nombre" => "Zapatilla Infantil",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 1,
            "precio" => 4000,
            "id_subcategoria"  => 6,
        ),
        14 => array(
            'id_producto' => 14,
            "nombre" => "Zapatilla Infantil",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 3,
            "precio" => 4000,
            "id_subcategoria"  => 6,
        ),
        15 => array(
            'id_producto' => 15,
            "nombre" => "Remera",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 2,
        ),
        16 => array(
            'id_producto' => 16,
            "nombre" => "Remera",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 3,
            "precio" => 4000,
            "id_subcategoria"  => 2,
        ),
        17 => array(
            'id_producto' => 17,
            "nombre" => "Remera",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 2,
        ),
        18 => array(
            'id_producto' => 18,
            "nombre" => "Pantalon",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 2,
            "precio" => 4000,
            "id_subcategoria"  => 3,
        ),
        19 => array(
            'id_producto' => 19,
            "nombre" => "Pantalon",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 3,
            "precio" => 4000,
            "id_subcategoria"  => 3,
        ),
        20 => array(
            'id_producto' => 20,
            "nombre" => "Pantalon",
            "descripcion" => "buzo naranja y verde",
            "id_marca" => 5,
            "precio" => 4000,
            "id_subcategoria"  => 3,
        ),

    );


GrabarArrayArchivo($a_producto, "../json", "productos.json");
