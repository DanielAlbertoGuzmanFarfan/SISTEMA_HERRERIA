<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$materia =strip_tags(stripslashes($_POST["materia"]));
$alias =strip_tags(stripslashes($_POST["alias"]));
$id_carrera =strip_tags(stripslashes($_POST["id_carrera"]));
$db->debug=true;

if ($materia or$alias or $id_carrera){
  $sql3=$db->Prepare("

                       SELECT *
                       FROM materias ma, carreras ca 
                       WHERE ma.id_carrera=ca.id_carrera 
                       AND ma.materia lIKE ?
                       AND ma.alias lIKE ?
                       AND ca.id_carrera like ?
  ");

  $rs3 =$db->GetAll($sql3, array($materia."%", $alias."%", $id_carrera."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>CARRERA</th><th>DIRECCION</th><th>?</th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["materia"];
      $str1 = $fila["alias"];
      $str2 = $fila["id_carrera"];
      echo"<tr>
      <td align ='center'>".resaltar($materia,$str)."</td>
      <td>".resaltar($alias,$str1)."</td> 
      <td>".($str2)."</td>  
      <td align='center'>
      <input type='radio' name='opcion' value='' onClick='buscar_carrera(".$fila["id_carrera"].")'>
      </td>
        </tr>";
        }
        echo"</table>
        </center>";
    } else {
      echo"<center><b> LA CARRERA NO EXISTE!!!</b></center><br>";
      echo "<center>
      <table class='listado'>
      <tr>
      <td><b>Carrera:</b></td>
      <td><input type='text' name='carrera1' size='10'></td>
      </tr>
      <tr>
      <td><b>Direccion:</b></td>
      <td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Telefono:</b></td>
      <td><input type='text' name='telefono1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Grado Academico:</b></td>
      <td><input type='text' name='grado_academico1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Descripcion:</b></td>
      <td><input type='text' name='descripcion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Duracion:</b></td>
      <td><input type='text' name='duracion1' size='10'></td>
      </tr>
      
      <td align='center' colspan='2'>
      <input type='button' value='ADCIONAR CARRERA' onclick='insertar_carrera()'>
      </td>
      </tr>
      </table>
      </center>
      ";
    }
}
?>