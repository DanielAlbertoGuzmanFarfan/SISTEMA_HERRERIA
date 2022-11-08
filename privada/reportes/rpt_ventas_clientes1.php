<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$clientes = $_REQUEST["clientes"];
$db-> debug = false;
$smarty = new Smarty;

//var_dump($clientes);
if ($clientes=="T") {
	

$sql = $db->Prepare("SELECT *
					FROM ventas v ,clientes cl
					WHERE cl.id_Cliente=v.id_Cliente
					AND v.estado <> '0'
					AND cl.estado <> '0'
					ORDER BY cl.id_Cliente DESC
	                 ");
$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT *
					FROM ventas v ,clientes cl
					WHERE cl.id_Cliente=v.id_Cliente
					AND cl.id_Cliente = ? 
					AND v.estado <> '0'
					AND cl.estado <> '0'
					ORDER BY cl.id_Cliente DESC
	                 ");
    $rs = $db->GetAll($sql, array($clientes));
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
$smarty->assign("ventas_clientes1" ,$rs);
$smarty->assign("fecha" ,$fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_ventas_clientes1.tpl");
?>
