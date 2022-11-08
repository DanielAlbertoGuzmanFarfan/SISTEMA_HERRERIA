<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$proveedores1 = $_REQUEST["proveedores1"];
//$db-> debug = false;
$smarty = new Smarty;

//var_dump($clientes);
if ($proveedores1=="P") {
	

$sql = $db->Prepare("SELECT *
					FROM productos prd ,proveedores1 pro
					WHERE pro.id_proveedor1=prd.id_proveedor1
					ORDER BY pro.id_proveedor1 DESC
	                 ");
$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT *
					FROM productos prd ,proveedores1 pro
					WHERE pro.id_proveedor1=prd.id_proveedor1
					AND pro.id_proveedor1 = ? 
					ORDER BY pro.id_proveedor1 DESC
	                 ");
    $rs = $db->GetAll($sql, array($proveedores1));
}

$sql1 = $db->Prepare("SELECT *
	                 FROM herreria
	                 WHERE id_Herreria = 1
	                 AND estado <> '0' 
	                 ");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["Nombre"];
$logo = $rs1[0]["logo"];
$smarty->assign("logo", $logo);

$fecha= date("Y-m-d H:i:s");
$smarty->assign("productos_proveedores1" ,$rs);
$smarty->assign("fecha" ,$fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_producto1.tpl");
?>
