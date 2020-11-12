
<?php
require_once("includes/funciones.php"); 

require_once("includes/cabecera.php");





$a_contacto = json_decode(file_get_contents('json/contacto.json'), true);

if (isset($_POST['in_enviar_contacto'])) {
    $in_nombre = $_POST['in_nombre'];
    $in_apellido = $_POST['in_apellido'];
    $in_celular = $_POST['in_celular'];
    $in_correo =$_POST['in_correo'];
    $in_pregunta = $_POST['in_pregunta'];
    $in_area = $_POST['in_area'];

    echo "    <div class='modal' tabindex='-1' role='dialog' id='ventana-modal'>";
    echo "    <div class='modal-dialog' role='document'>";
    echo "      <div class='modal-content'>";
    echo "        <div class='modal-header rounded-0 border-0 text-white' style='background-color:red;'>";
    echo "          <h5 class='modal-title'> ".$in_nombre ." gracias por contactarse con nosotros </h5>";
  
    echo "        </div>";
    echo "        <div class='modal-body'style='background-color:black;'>";
    echo "          <p  class ='text-white'>Nos contactaremos lo mas pronto posible</p>";
    echo "        </div>";
    echo "        <div class='modal-footer border-0' style='background-color:black;'>";
    echo "          <button type='button' class='btn btn-danger' ><a class='text-white' href='index.php'>Volver</a></button>";
    echo "        </div>";
    echo "      </div>";
    echo "    </div>";
    echo "    </div>";


    array_push($a_contacto, array(
    
        
        "nombre" => $in_nombre,
        "apellido" => $in_apellido,
        "celular" =>  $in_celular,
        "correo" => $in_correo,
        "pregunta" => $in_pregunta,
        "area" => $in_area

    ));
    file_put_contents('json/contacto.json', json_encode($a_contacto));

    

    
}
    

?>
    <main class="container-fluid mb-4">
        <section class="">

            <div class="container contenedor">
                <h1 class="titulo"> Contactenos</h1>
                <form action="#" id="formulario" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ingrese su nombre</label>
                        <input type="text" name="in_nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ingrese su apellido</label>
                        <input type="text" name="in_apellido" class="form-control" id="exampleFormControlInput1" placeholder="Apellido"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ingrese su número celular</label>
                        <input type="tel" name="in_celular" class="form-control" id="exampleFormControlInput1" placeholder="Celular"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ingrese su Correo</label>
                        <input type="email" name="in_correo" class="form-control" id="exampleFormControlInput1"
                            placeholder="mail@correo.com.ar" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Area donde desea enviar su consulta</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="in_area" required>
                         
                            <option selected>Atencion al Cliente</option>
                            <option>Devoluciones</option>
                            <option>Reclamos</option>
                           
                        </select>
                    </div>


                   <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Dejenos su pregunta: </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="in_pregunta"></textarea>
                    </div>
                    <input type="submit" class="btn   tn-lg btn-block boton" name="in_enviar_contacto" value="Enviar">
                    <!-- <button type="button" class="btn  tn-lg btn-block boton">Enviar</button> -->

                </form>
            </div>
        </section>
    </main>
    
    <?php  


require_once("includes/pie.php");
?>
