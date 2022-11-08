<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$proveedor1= strip_tags(stripslashes($_POST["proveedor1"]));
$descripcion = strip_tags(stripslashes($_POST["descripcion"]));
$modelo = strip_tags(stripslashes($_POST["modelo"]));

//$db-> debug=true;

if ($proveedor1 or $descripcion or $modelo ) {
	$sql3 = $db->Prepare("SELECT *
						FROM productos prd, proveedores1 pro
                        WHERE pro.id_proveedor1 = prd.id_proveedor1
                        AND pro.nombre like ?
                        AND prd.descripcion like ?
                        AND prd.modelo like ? 
						");

	$rs3 = $db->GetAll($sql3, array($descripcion."%",$modelo."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>NOMBRE</th><th>DESCRIPCION</th><th>MODELO</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["proveedor1"];
					$str1 = $fila["descripcion"];
					$str2 = $fila["modelo"];
					echo "<tr>
					<td align='center'>".resaltar($proveedor1,$str)."</td>
					<td>".resaltar($descripcion,$str1)."</td>
					<td>".resaltar($modelo,$str2)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='buscar_proveedor1 (".$fila["id_proveedor1"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> EL PROVEEDOR NO EXISTE!!!</b></center><br>";
			
		}
}
?>