<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$genero = $_REQUEST["genero"];

$smarty = new Smarty;

if ($genero == "T"){
$sql = $db->Prepare("SELECT *
	                 FROM personas
	                 WHERE estado <> '0' 
	                 ");
$rs = $db->GetAll($sql);
}else{
	$sql = $db->Prepare("SELECT *
	                 FROM personas
	                 WHERE genero = ?
	                 AND estado <> '0' 
	                 ");
    $rs = $db->GetAll($sql, array($genero));
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
$smarty->assign("personas_genero1" ,$rs);
$smarty->assign("fecha" ,$fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_personas_genero1.tpl");
?>
