<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre =strip_tags(stripslashes($_POST["nombre"]));
$telefono =strip_tags (stripslashes($_POST["telefono"]));

$db->debug=false;
if ($nombre or $telefono){
  $sql3=$db->Prepare("
  SELECT *
  FROM proveedores
  WHERE Nombre like ?
  AND Telefono like ?
  AND estado <> '0'

  ");
  $rs3 =$db->GetAll($sql3, array($nombre."%",$telefono."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>NOMBRES</th><th>TELEFONO</th><th><img src='../../imagenes/modificar.jpg' width='9%'></th><th><img src='../../imagenes/borrar.jpg' width='9%'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["Telefono"];
      $str1 = $fila["Nombre"];
      
      echo"<tr>
      <td align ='center'>".resaltar($telefono,$str)."</td>
      <td>".resaltar($nombre,$str1)."</td>    
      <td align='center'>
      <form name='formModif".$fila['id_Proveedor']."' method='post' action='proveedor_modificar.php'>
      <input type='hidden' name='id_Proveedor' value='".$fila['id_Proveedor']."'>
      <a href='javascript:document.formModif".$fila['id_Proveedor'].".submit();' title='modificar proveedor del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["id_Proveedor"]."' method='post' action='proveedor_eliminar.php'>
      <input type='hidden' name='id_Proveedor' value='".$fila['id_Proveedor']."'>
      <a href='javascript:document.formElimi".$fila['id_Proveedor'].".submit();' title='eliminar proveedores del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar al proveedor..?\"))';
      location.href='proveedor_eliminar.php''>
      ELIMINAR>>>>>>
  
      </a>
      </form>
      </td>
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> el proveedor no existe</b></center><br>";
  }
}

?>
