<?php

//creamos la sesion
session_start();

//validamos si se ha hecho o no el inicio de sesion correctamente

//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['rut'])) 
{
  header('Location: conserjeval.php'); 
  exit();
}
?>
<?php
header("Content-Type: text/html;charset=utf-8");
$narchivo = $_POST["archivo"];
$path="informativos"; 
$directorio=dir($path);
while ($archivo = $directorio->read()) 
       {       
        if(!is_dir($archivo))
        {
            $aux = strcmp($archivo, $narchivo);
          if($aux == 0)
          {

               unlink($path."/".$archivo);
               ?>
           <script languaje="javascript">
           alert("Archivo borrado");
           location.href = document.referrer;
          </script>
            <?
          }
        }
       }
?>