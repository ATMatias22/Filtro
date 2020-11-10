<?php

require_once("includes/funciones.php");

require_once("includes/cabecera.php");

require_once("includes/aside.php");



$a_productos = json_decode(file_get_contents('json/productos.json'), true);
$a_marca = json_decode(file_get_contents('json/marca.json'), true);
$a_categoria = json_decode(file_get_contents('json/categoria.json'), true);
$a_subcategoria = json_decode(file_get_contents('json/subcategoria.json'), true);





if (isset($_GET['id_subcategoria'])) {
    $guardarClave = key($_GET); //aca guardamos el nombre de la varwiable que traemos atraves de la url
    //en este caso podria ser id_subcategoria 

    $sub_cat_nombre = $a_subcategoria[$_GET['id_subcategoria']]['nombre']; // aca obtenemos el nombre
    //de la categoria segun el id que se traiga en la url


    $get_id = $_GET['id_subcategoria']; //guardamos el valor que tiene $get[idcategoria]


} else if (isset($_GET['id_marca'])) {
    $guardarClave = key($_GET); //aca guardamos el nombre de la varwiable que traemos atraves de la url
    //en este caso podria ser id_marca
    $sub_cat_nombre = $a_marca[$_GET['id_marca']]['nombre'];
    $get_id = $_GET['id_marca'];
    
    
}
?>


<section class="texto col-xl-10 col-md-9 col-sm-8 ">

    <h2 class="text-center pt-3"><?php echo $sub_cat_nombre  ?></h2>

    <div class=" row col-12  justify-content-around  m-0 p-0  ">

        <?php

        $a_productos = json_decode(file_get_contents('json/productos.json'), true);



        if (isset($guardarClave)) { //VERIFICAMOS SI EXISTE LA VARIABLE Y SI EXISTE QUE RECORRA LOS PRODUCTOS
        foreach ($a_productos as $prod) {


                $id_sub_cat = $prod[$guardarClave]; //EN $PROD['guardarClave'] SE LE VA A PASAR EL NOMBRE DE LA VARIABLE QUE FUE TRAIDA DEL GET
                // EN ESTE CASO SERIA ID_MARCA O ID_SUBCATEGORIA Y EL FOREACH QUE ESTA EN FILTRO.PHP RECORRE SEGUN EL FILTRADO
                // QUE LE PASAMOS EN ESTE CASO ID_MARCA O ID_SUBCATEGORIA Y LO GUARDAMOS EN UNA VARIABLE
                //


                if ($get_id == $id_sub_cat) { //ACA COMPARAMOS EL VALOR QUE LE PASAMOS POR URL (GET_ID) CON EL ID_SUBCATEGORIA
                    // DEL PRODUCTO, CUANDO EL PRODUCTO TENGA EL MISMO ID DE SUBCATEGORIA QUE CON EL VALOR PASAADO POR LA URL
                    //ENTONCES SE CREA UNA CARD. LO MISMO PASARIA CON ID_MARCA SI ES QUE A $ID_FILTRADO LE PASAMOS EL ID_MARCA



                    $id_prod = $prod['id_producto'];
                    $nom = $prod['nombre'];
                    $desc = substr($prod['descripcion'], 0, 20);
                    $id_marca = $prod['id_marca'];
                    $precio = $prod['precio'];
                    $ruta_img = 'imagenes/' . $id_prod . '/' . $id_prod . '.jpg';
                    $nom_marca = $a_marca[$id_marca]['nombre'];


        ?>


                    <div class="card   col-xl-4 col-md-6 mt-4 border-0 ">
                        <div style='border:1px solid rgba(0,0,0,.125)'>

                            <a>
                                <img src='<?php echo $ruta_img;  ?>' class="card-img-top" alt="<?php echo $nom  ?>">
                            </a>

                            <div class="card-body ">
                                <h2 class="card-title"><?php echo $nom_marca ?></h2>
                                <p class="card-text"> <?php echo $desc;  ?> </p>
                                <p><?php   ?></p>
                                <p> $<?php echo $precio ?>.- </p>
                                <a href="detalle-producto.php?id_producto=<?php echo $id_prod ?>" class="btn">Ver más</a>
                            </div>

                        </div>
                    </div>

        <?php

                }
            }
        }
        ?>

</section>


<?php
require_once("includes/finAside.php");
require_once("includes/pie.php");
?>