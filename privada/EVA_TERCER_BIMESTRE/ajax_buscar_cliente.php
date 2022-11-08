<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre =strip_tags(stripslashes($_POST["id_cliente1"]));
$nro_placa =strip_tags(stripslashes($_POST["nro_placa"]));
$modelo =strip_tags(stripslashes($_POST["modelo"]));

//$db->debug=true;

if ($nombre or $nro_placa or$modelo ){
  $sql3=$db->Prepare("

                       SELECT *
                       FROM vehiculos veh, clientes1 cl1 
                       WHERE veh.id_cliente1=cl1.id_cliente1 
                       AND cl1.nombre lIKE ?
                       AND veh.nro_placa lIKE ?
                       AND veh.modelo like ?
  ");

  $rs3 =$db->GetAll($sql3, array($nombre."%", $nro_placa."%", $modelo."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>NOMBRES</th><th>PLACA</th><th>MODELO</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["nombre"];
      $str1 = $fila["nro_placa"];
      $str2 = $fila["modelo"];
      echo"<tr>
      <td align ='center'>".resaltar($nombre,$str)."</td>
      <td>".resaltar($nro_placa,$str1)."</td> 
      <td>".resaltar($modelo,$str2)."</td> 
     
        </tr>";
        }
        echo"</table>
        </center>";
    } else {
      echo"<center><b> EL CLIENTE NO EXISTE!!!</b></center><br>";
    }
}
?>