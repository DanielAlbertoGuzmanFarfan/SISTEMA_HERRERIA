<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

//$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["id_Herreria"] = 1;
 $reg["Nombre"] = $nombre;
 $reg["Correo"] = $correo;
 $reg["Direccion"] = $direccion;
 $reg["Telefono"] = $telefono;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["fec_modificacion"] = date("Y-m-d H:i:s");
 $reg["estado"] = '1';
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("proveedores",$reg,"INSERT");

 if ($rs1){
 	header("Location: proveedores.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
 	$smarty->assign("direc_css", $direc_css);
 	$smarty->assign("proveedor_nuevo1.tpl");
 }
 ?>