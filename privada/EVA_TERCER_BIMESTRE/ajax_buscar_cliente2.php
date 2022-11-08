<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_cliente1 = $_POST["id_cliente1"];


//$db-> debug=true;

  $sql3=$db->Prepare(" SELECT *
						FROM clientes1
						WHERE id_cliente1 = ?

						");

  $rs3 =$db->GetAll($sql3, array($id_cliente1));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["nombre"];
      $str1 = $fila["apellidos"];
      $str2 = $fila["telefono"];
      echo"<tr>
      <td align ='center'>".($str)."</td>
      <td>".($str1)."</td> 
      <td>".($str2)."</td> 
    
     
        </tr>";
        }
        echo"</table>
        </center>";
    } else {
      echo"<center><b> EL CLIENTE NO EXISTE!!!</b></center><br>";
      
    }
?>