<?php

$a_categoria = json_decode(file_get_contents('json/categoria.json'), true);
$a_subcategoria = json_decode(file_get_contents('json/subcategoria.json'), true);
$a_marca = json_decode(file_get_contents('json/marca.json'), true);
// $a_producto =json_decode(file_get_contents('json/productos.json'), true);


?>


<div class="row col-12 m-0 p-0 ">
    <!-- Sidebar -->

    <div class="vertical-menu   col-xl-2 col-md-3 col-sm-4  px-1 " id="sidebar">
        <div class="sticky-top ">
            <ul class="list-unstyled components  mb-0  ">

                <?php

                foreach ($a_categoria as $categoria) {
                    $id_cat = $categoria['id_categoria'];
                    $nom_cat = $categoria['nombre'];
                ?>

                    <li>
                        <a href="#<?php echo  $nom_cat ?>" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo  $nom_cat ?></a>
                        <ul class="collapse list-unstyled" id="<?php echo  $nom_cat ?>">



                            <?php

                            foreach ($a_subcategoria as $sub_categoria) {

                                if (isset($sub_categoria['id_subcategoria'])) {
                                    $id_sub_cat = $sub_categoria['id_subcategoria'];
                                }
                                $id_cat_sub = $sub_categoria['id_categoria'];
                                $nom_sub_cat = $sub_categoria['nombre'];
                                if (isset($sub_categoria['id_marca'])) {
                                    $id_marca = $sub_categoria['id_marca'];
                                }


                                if (isset($sub_categoria['id_subcategoria'])) {
                                    if ($id_cat_sub ==  $id_cat) {
                            ?>
                                        <li>
                                            <a href="filtro.php?id_subcategoria=<?php echo $id_sub_cat ?>"> <span><?php echo $nom_sub_cat ?></span></a>
                                        </li>
                                    <?php


                                    }
                                }

                                if (isset($sub_categoria['id_marca'])) {
                                    if ($id_cat_sub ==  $id_cat) {

                                    ?>
                                        <li>

                                            <a href="filtro.php?id_marca=<?php echo $id_marca ?>"> <span><?php echo $nom_sub_cat ?></span></a>
                                        </li>
                            <?php


                                    }
                                }
                            }




                            ?>


                        </ul>
                    </li>


                <?php


                }

                ?>

                </li>

            </ul>
        </div>
    </div>