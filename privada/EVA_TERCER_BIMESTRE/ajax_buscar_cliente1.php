<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];

//$db-> debug=true;

if ($nombre or $apellidos or$telefono ){
  $sql3=$db->Prepare(" SELECT *
						FROM clientes1
						WHERE nombre lIKE ?
                       AND apellidos lIKE ?
                       AND telefono like ?
						");

  $rs3 =$db->GetAll($sql3, array($nombre."%", $apellidos."%", $telefono."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th><th>?</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["nombre"];
      $str1 = $fila["apellidos"];
      $str2 = $fila["telefono"];
      echo"<tr>
      <td align ='center'>".resaltar($nombre,$str)."</td>
      <td>".resaltar($apellidos,$str1)."</td> 
      <td>".resaltar($telefono,$str2)."</td> 
      <td align='center'>
      <input type='radio' name='opcion' value='' onClick='buscar_cliente1(".$fila["id_cliente1"].")'>
      </td>
     
        </tr>";
        }
        echo"</table>
        </center>";
    } else {
      echo"<center><b> EL CLIENTE NO vvvvvvvEXISTE!!!</b></center><br>";
      echo "<center>
      <table class='listado'>
      <tr>
      <td><b>Nombre:</b></td>
      <td><input type='text' name='nombre1' size='10'></td>
      </tr>
      <tr>
      <td><b>Apellidos:</b></td>
      <td><input type='text' name='apellidos1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Telefono:</b></td>
      <td><input type='text' name='telefono1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      
      <td align='center' colspan='2'>
      <input type='button' value='ADCIONAR CLIENTE' onclick='insertar_cliente1()'>
      </td>
      </tr>
      </table>
      </center>
      ";

    }
}
?>