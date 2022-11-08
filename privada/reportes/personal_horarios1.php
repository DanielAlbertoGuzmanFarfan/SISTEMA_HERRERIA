<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$smarty =new Smarty();
$sql= $db->Prepare("SELECT * 
	                   FROM personal pe, horarios ho
                       WHERE pe.id_Personal=ho.id_Personal
                        AND pe.estado <> '0' 
                        AND ho.estado <> '0' 
                        ORDER BY (ho.id_Personal) DESC
                        ");
$rs=$db->GetAll($sql);
$sql1=$db->Prepare("SELECT * 
	                   FROM herreria
	                   WHERE id_Herreria =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["Nombre"];

$logo=$rs1[0]["logo"];

$fecha =date("Y-m-d H:i:s" );

$smarty->assign("personal_horarios",$rs);
$smarty->assign("logo",$logo);
$smarty->assign("fecha",$fecha);
$smarty->assign("direc_css",$direc_css);
$smarty->display("personal_horarios1.tpl");
