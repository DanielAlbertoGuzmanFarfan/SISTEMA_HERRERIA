<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Personal = $_REQUEST["id_Personal"];

$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM horarios
                     WHERE id_Personal = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_Personal));

if(!$rs){
	$reg = array();
	$reg ["estado"] = '0';
	$reg ["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("personal", $reg, "UPDATE", "id_Personal='".$id_Personal."'");
	header("Location:personal.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("personal_eliminar.tpl");
}
?>