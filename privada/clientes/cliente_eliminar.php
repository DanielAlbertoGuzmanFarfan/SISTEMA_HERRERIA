<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_Cliente = $_REQUEST["id_Cliente"];

$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
                     FROM ventas
                     WHERE id_Cliente = ?
                     AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_Cliente));

if(!$rs){
	$reg = array();
	$reg ["estado"] = '0';
	$reg ["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("clientes", $reg, "UPDATE", "id_Cliente='".$id_Cliente."'");
	header("Location:clientes.php");
	exit();
}else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("cliente_eliminar.tpl");
}
?>