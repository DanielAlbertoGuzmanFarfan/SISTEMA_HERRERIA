<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno =strip_tags(stripslashes($_POST["paterno"]));
$materno =strip_tags (stripslashes($_POST["materno"]));
$nombre = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

$db->debug=false;
if ($paterno or $materno or $nombres or $ci){
  $sql3=$db->Prepare("
  SELECT *
  FROM personas
  WHERE ap like ?
  AND am like ?
  AND nombres like ?
  AND ci like ?
  AND estado <> '0'

  ");
  $rs3 =$db->GetAll($sql3, array($paterno."%",$materno."%",$nombres."%",$ci."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>C.I</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["ciss"];
      $str1 = $fila["ap"];
      $str2 = $fila["am"];
      $str3 = $fila["nombres"];
      echo"<tr>
      <td align ='center'>".resaltar($ci,$str)."</td>
      <td>".resaltar($paterno,$str1)."</td>
      <td>".resaltar($materno,$str2)."</td>
      <td>".resaltar($nombres,$str3)."</td>    
      <td align='center'>
      <form name='formModif".$fila['id_persona']."' method='post' action='persona_modificar.php'>
      <input type='hidden' name='id_persona' value='".$fila['id_persona']."'>
      <a href='javascript:document.formModif".$fila['id_persona'].".submit();' title='modificar personas del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["id_persona"]."' method='post' action='persona_eliminar.php'>
      <input type='hidden' name='id_persona' value='".$fila['id_persona']."'>
      <a href='javascript:document.formElimi".$fila['id_persona'].".submit();' title='eliminar personas del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a la persona..?\"))';
      location.href='persona_eliminar.php''>
      ELIMINAR>>>>>>
  
      </a>
      </form>
      </td>
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> la persona no existe</b></center><br>";
  }
}

?>
