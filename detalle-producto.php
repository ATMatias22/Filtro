<?php



require_once("includes/cabecera.php");

require_once("includes/aside.php");

date_default_timezone_set('America/Argentina/Buenos_Aires'); // seteo hora local
$a_productos = json_decode(file_get_contents('json/productos.json'), true);
$a_comentarios = json_decode(file_get_contents('json/comentarios.json'), true);

//variables de comentarios

if (isset($_GET['in_enviar_comentario'])) {
    $fecha = date('Y-m-d H:i');
    $in_correo = $_GET['in_correo'];
    $in_comentario = $_GET['in_comentario'];
    $id_producto = $_GET['id_producto'];
    $in_valoracion =$_GET['inlineRadioOptions'];

  echo "    <div class='modal' tabindex='-1' role='dialog' id='ventana-modal'>";
  echo "    <div class='modal-dialog' role='document'>";
  echo "      <div class='modal-content' >";
  echo "        <div class='modal-header rounded-0 border-0 text-white' style='background-color:red;'>";
  echo "          <h5 class='modal-title '>Gracias por su comentario ".$in_correo ."</h5>";

  echo "        </div>";
  echo "        <div class='modal-body  ' style='background-color:black;'>";
  echo "          <p class ='text-white'>Su valoracion ". $in_valoracion ." sera agregada al producto.</p>";
  echo "        </div>";
  echo "        <div class='modal-footer border-0' style='background-color:black;'>";
  echo "          <button type='button' class='btn btn-danger' ><a class='text-white' href='detalle-producto.php?id_producto=".$id_producto."'>Volver</a></button>";
  echo "        </div>";
  echo "      </div>";
  echo "    </div>";
  echo "    </div>";

    array_push($a_comentarios, array(

        "id_producto" =>   $id_producto,
        "fecha" => $fecha,
        "comentario" => $in_comentario,
        "correo" =>  $in_correo,
        "valoracion" => $in_valoracion
    ));

    file_put_contents('json/comentarios.json', json_encode($a_comentarios));
}





/* ACA ESTA LA VARIABLE QUE RESCATAMOS DE LA URL*/
$pr_id = $_GET['id_producto'];


// Variebles de productos

$nom = ucfirst($a_productos[$pr_id]['nombre']);
$desc = $a_productos[$pr_id]['descripcion'];
$precio = $a_productos[$pr_id]['precio'];
$ruta_img = 'imagenes/' . $pr_id . '/' . $pr_id . '.jpg';



/* ACA MOSTRAMOS EL PRODUCTO QUE SE SELECCIONO*/

?>

<section class="texto col-xl-10 col-md-9 col-sm-8  m-0 p-0">

    <div class="card mx-3 my-3 ">

        <div class="row ">
            <div class="col-12 col-xl-4 col-md-12 ">
                <a data-fancybox="gallery" href="<?php echo $ruta_img; ?>" target="_top">
                    <img src='<?php echo $ruta_img;  ?>' class="card-img-top w-100" alt="nike">
                </a>
            </div>
            <div class="col-12 col-xl-8 col-md-12 px-3">
                <div class="card-block px-3">
                    <h2 class="card-title titulo">
                        <?php echo $nom  ?></h2>
                    <p class="card-text">
                        <?php echo $desc  ?>
                    </p>

                    <p class="card-text">

                        <h2>$ <?php echo $precio ?>.-</h2>

                    </p>
                    <div class=" d-block  d-xl-none text-center pb-3"> <a href="#" class="btn  col-6 ">COMPRAR</a></div>
                    <div class=" d-none d-xl-block  "> <a href="#" class="btn ">COMPRAR</a></div>
                </div>
            </div>

        </div>

    </div>

    <div class="sector-comentarios ">

    <h2 class="text-center">Comentarios</h2>

    <?php

    /*ACA MOSTRAMOS LOS 3 ULTIMOS COMENTARIOS DEL PRODUCTO  */
    $cont = 1;
    foreach (array_reverse($a_comentarios) as $a_comentario) {
        if ($a_comentario['id_producto'] == $pr_id) {
           
    ?>
            <div class="card m-2 mx-3">
                <div class="card-header">
                    <strong> <?php echo $a_comentario['correo']; ?></strong>
                    <p><?php echo $a_comentario['fecha']; ?></p>
                </div>

                <div class="card-body">
                    <h5 class="card-title text-left"><?php echo $a_comentario['comentario']; ?></h5>
                    <strong>
                        <p class="card-text">Valoración <?php echo $a_comentario['valoracion']; ?></p>
                    </strong>

                </div>
            </div>
    <?php

            $cont++;
            if ($cont >= 4) {
                break;
            }
        }
    }

    ?>

    
</div>

    <!--  FORM -->
    <div class=" contenedor mx-3 px-3">
        <h1 class="titulo"> Dejenos sus comentarios</h1>

        <form action="#" id="formulario" method="get">

            <div class="form-group">
                <label>Ingrese su valoracion</label> <br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"  checked value="1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">3 </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                    <label class="form-check-label" for="inlineRadio4">4 </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5">
                    <label class="form-check-label" for="inlineRadio5">5 </label>
                </div>
            </div>


            <div class="form-group">

                <label for="exampleFormControlInput1">Ingrese su Correo</label>
                <input type="email" name="in_correo" class="form-control" id="exampleFormControlInput1" placeholder="mail@correo.com.ar" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1"> Comentarios: </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="in_comentario"></textarea>
            </div>

            <input type="hidden" name="id_producto" value=<?php echo $pr_id; ?>>
            <input type="submit" class="btn btn-lg btn-block boton" name="in_enviar_comentario" value="Enviar">
            <!-- <button type="button" class="btn btn-lg btn-block boton">Enviar</button> -->

        </form>
    </div>


</section>


<?php

require_once("includes/finAside.php");
require_once("includes/pie.php");
?>