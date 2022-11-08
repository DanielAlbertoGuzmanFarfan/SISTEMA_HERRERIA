<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_carrera = $_POST["id_carrera"];

//$db-> debug=true;

	$sql3 = $db->Prepare("SELECT *
						FROM carreras
						WHERE id_carrera = ?
						");

$rs3 = $db->GetAll($sql3, array($id_carrera));

echo "<center>
<table width='60%' border='1'>
<tr>
<th colspan='4'>Datos Carrera</th>
</tr>
";
foreach ($rs3 as $k => $fila) {
	echo "<tr>
	<td align='center'>".$fila["carrera"]."</td>
	<td>".$fila["direccion"]."</td>
	</tr>
	";
}
echo "</table>
	</center>"

?>