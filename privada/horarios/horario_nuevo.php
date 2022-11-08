<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM personal p
					WHERE p.estado <> '0'
					ORDER BY p.id_Personal DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("personal", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("horario_nuevo.tpl");
?>