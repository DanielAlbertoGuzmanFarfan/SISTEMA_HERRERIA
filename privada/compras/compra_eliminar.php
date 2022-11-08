<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Compra = $_REQUEST["id_Compra"];

$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM detalles_compras
                     WHERE id_Compra = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_Compra));

if(!$rs){
	$reg = array();
	$reg ["estado"] = '0';
	$reg ["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("compras", $reg, "UPDATE", "id_Compra='".$id_Compra."'");
	header("Location:compras.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("compra_eliminar.tpl");
}
?>