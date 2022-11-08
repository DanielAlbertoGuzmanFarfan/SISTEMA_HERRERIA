<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$ci = $_POST["ci"];
$correo = $_POST["correo"];
$nit = $_POST["nit"];

//$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["id_Herreria"] = 1;
 $reg["Nombres"] = $nombres;
 $reg["Apellidos"] = $apellidos;
 $reg["Telefono"] = $telefono;
 $reg["Ci"] = $ci;
 $reg["Correo"] = $correo;
 $reg["Nit"] = $nit;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["fec_modificacion"] = date("Y-m-d H:i:s");
 $reg["estado"] = '1';
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("clientes",$reg,"INSERT");

 if ($rs1){
 	header("Location: clientes.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
 	$smarty->assign("direc_css", $direc_css);
 	$smarty->assign("cliente_nuevo1.tpl");
 }
 ?>