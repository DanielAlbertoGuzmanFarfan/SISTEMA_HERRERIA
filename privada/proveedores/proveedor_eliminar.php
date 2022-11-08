<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Proveedor = $_REQUEST["id_Proveedor"];

$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM compras
                     WHERE id_Proveedor = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_Proveedor));

if(!$rs){
	$reg = array();
	$reg ["estado"] = '0';
	$reg ["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("proveedores", $reg, "UPDATE", "id_Proveedor='".$id_Proveedor."'");
	header("Location:proveedores.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("proveedor_eliminar.tpl");
}
?>