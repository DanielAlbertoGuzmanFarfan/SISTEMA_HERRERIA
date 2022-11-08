<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM carreras ca
					ORDER BY ca.id_carrera DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("carreras", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("materia_nuevo.tpl");
?>