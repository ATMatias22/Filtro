<?php

require_once("includes/cabecera.php");

require_once("includes/aside.php");


?>




<section class="texto col-xl-10 col-md-9 col-sm-8 ">

    <h2 class="text-center pt-3">Principal</h2>


    <div class=" row col-12  justify-content-around  m-0 p-0  ">


        <?php

        $a_productos = json_decode(file_get_contents('json/productos.json'), true);
        $a_marca = json_decode(file_get_contents('json/marca.json'), true);
        $a_subcategoria = json_decode(file_get_contents('json/subcategoria.json'), true);

        foreach ($a_productos as $prod) {

            $id_prod = $prod['id_producto'];
            $nom = $prod['nombre'];
            $desc = substr($prod['descripcion'],0,20); // vamos a usar una descripcion corta            
            $id_marca = $prod['id_marca'];
            $precio = $prod['precio'];
            $id_subcat = $prod['id_subcategoria'];
            $ruta_img = 'imagenes/'.$id_prod.'/'.$id_prod.'.jpg';
            $nom_marca = $a_marca[$id_marca]['nombre'];
            $nom_subcat = $a_subcategoria[$id_subcat]['nombre'];
           

       

        ?>
            <div class="card   col-xl-4 col-md-6 mt-4 border-0 ">
                <div style='border:1px solid rgba(0,0,0,.125)'>

                    <a>
                        <img src='<?php echo $ruta_img;  ?>' class="card-img-top" alt="<?php echo $nom  ?>">
                    </a>

                    <div class="card-body ">
                        <h2 class="card-title"><?php echo $nom_marca ?></h2>
                        <p class="card-text"> <?php echo $nom_subcat;  ?> </p>
                        <p class="card-text"> <?php echo $desc;  ?> </p>

                        <p> <?php   ?></p>
                        <p>$ <?php echo $precio ?>.-</p>
                       
                    <a href="detalle-producto.php?id_producto=<?php echo $id_prod ?>" class="btn">Ver más</a>
                    </div>

                </div>
            </div>


        <?php
        }
        ?>
    </div>

</section>


<?php
require_once("includes/finAside.php");
require_once("includes/pie.php");
?>