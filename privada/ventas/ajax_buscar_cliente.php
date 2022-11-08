<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$Nombres = strip_tags(stripslashes($_POST["Nombres"]));
$Apellidos = strip_tags(stripslashes($_POST["Apellidos"]));
$Telefono = strip_tags(stripslashes($_POST["Telefono"]));
$Ci = strip_tags(stripslashes($_POST["Ci"]));

var_dump($Nombres);
$db-> debug=true;
/*
if ($Nombres or $Apellidos or $Telefono or $Ci) {
	$sql3 = $db->Prepare("SELECT *
						FROM clientes
						WHERE Nombres LIKE ?
						AND Apellidos LIKE ?
						AND Telefono LIKE ?
						AND Ci LIKE ?
						AND estado <> '0'
						");

	$rs3 = $db->GetAll($sql3, array($Nombres."%",$Apellidos."%",$Telefono."%",$Ci."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>C.I.</th><th>APELLIDOS</th><th>NOMBRES</th><th>TELEFONO</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["Ci"];
					$str1 = $fila["Nombres"];
					$str2 = $fila["Apellidos"];
					$str3 = $fila["Telefono"];
					echo "<tr>
					<td align='center'>".resaltar($ci,$str)."</td>
					<td>".resaltar($Nombres,$str1)."</td>
					<td>".resaltar($Apellidos,$str2)."</td>
					<td>".resaltar($Telefono,$str3)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='buscar_cliente(".$fila["id_Cliente"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> LA PERSONA NO EXISTE!!!</b></center><br>";
			echo "<center>
			<table class='listado'>
			<tr>
			<td><b>Cedula de Identidad:</b></td>
			<td><input type='text' name='ci1' size='10'></td>
			</tr>
			<tr>
			<td><b>Apellido Paterno:</b></td>
			<td><input type='text' name='ap1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>Apellido Materno:</b></td>
			<td><input type='text' name='am1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>Nombres:</b></td>
			<td><input type='text' name='nombres1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>Direccion:</b></td>
			<td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>Telefono:</b></td>
			<td><input type='text' name='telef1' size='10'></td>
			</tr>
			<tr>
			<td><b>Genero:</b></td>
			<td><input type='radio' name='genero1' size='10'>Femenino
			<input type='radio' name='genero1' size='10'>Masculino<br>
			</td>
			</tr>
			<td align='center' colspan='2'>
			<input type='button' value='ADCIONAR PERSONA' onclick='insertar_persona()'>
			</td>
			</tr>
			</table>
			</center>
			";
		}
}*/
?>