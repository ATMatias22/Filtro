<?php

function GrabarArrayArchivo($array, $carpeta, $archivo)
{

  if (!file_exists($carpeta)) 
  {
    mkdir($carpeta);
  
  }
  $fp = fopen($carpeta . "/" . $archivo, "w");
  fwrite($fp, json_encode($array));
  fclose($fp);

}



function MostarArray($array)
{
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}




 
  
 




