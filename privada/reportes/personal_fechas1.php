<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$fecha1=$_REQUEST['fecha1'];
$fecha2=$_REQUEST["fecha2"];
$smarty=new Smarty;

$db->debug=false;

$sql=$db->Prepare("SELECT *
	               FROM personal
	               WHERE fecha_Inicio BETWEEN ? AND ?
	               AND estado <> '0'

	               ");
$rs = $db->GetAll($sql, array($fecha1, $fecha2));




$sql1=$db->Prepare("SELECT * 
	                   FROM herreria
	                   WHERE id_Herreria =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["Nombre"];

$logo=$rs1[0]["logo"];


$smarty->assign("personal_fechas1",$rs);
$smarty->assign("logo",$logo);
$smarty->assign("fechas1",$fecha1);
$smarty->assign("fechas2",$fecha2);

$smarty->assign("direc_css",$direc_css);
$smarty->display("personal_fechas1.tpl");

?>