<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_proveedor1 = $_REQUEST["id_proveedor1"];

$smarty=new Smarty;

 //$db->debug=true;
 var_dump($id_proveedor1);
$sql=$db->Prepare("SELECT *
	               FROM proveedores1
	               WHERE id_proveedor1 = ?
	               ");
$rs = $db->GetAll($sql, array($id_proveedor1));

$sql1=$db->Prepare("SELECT * 
	                   FROM herreria
	                   WHERE id_Herreria =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["Nombre"];
$logo=$rs1[0]["logo"];
$smarty->assign("logo",$logo);

$smarty->assign("proveedor1",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tec_proveedores1.tpl");
?>