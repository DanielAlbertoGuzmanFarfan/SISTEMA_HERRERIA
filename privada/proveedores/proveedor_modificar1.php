<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Proveedor = $_REQUEST["id_Proveedor"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

//$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["Nombre"] = $nombre;
 $reg["Direccion"] = $direccion;
 $reg["Correo"] = $correo;
 $reg["Telefono"] = $telefono;
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("proveedores", $reg, "UPDATE", "id_Proveedor='".$id_Proveedor."'");

 if ($rs1){
 	header("Location: proveedores.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_Proveedor", $id_Proveedor);
	$smarty->display("proveedor_modificar1.tpl");
 }
 ?>