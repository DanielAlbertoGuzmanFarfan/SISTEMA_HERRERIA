<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_Horario = $_REQUEST["id_Horario"];
$__id_Personal = $_REQUEST["id_Personal"];

$smarty = new Smarty;



$sql = $db->Prepare("SELECT *
 					FROM horarios
 					WHERE id_Horario = ?
 					");
$rs = $db->GetAll($sql, array($__id_Horario));

$sql2 = $db->Prepare("SELECT *
 					FROM personal
 					WHERE id_Personal = ?
 					AND estado <> 0
 					");
$rs2 = $db->GetAll($sql2, array($__id_Personal));

$sql3 = $db->Prepare("SELECT *
 					FROM personal
 					WHERE id_Personal <> ?
 					AND estado <> 0
 					");
$rs3 = $db->GetAll($sql3, array($__id_Personal));

$smarty->assign("horarios", $rs);
$smarty->assign("persona", $rs2);
$smarty->assign("personal", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("horario_modificar.tpl");
?>
