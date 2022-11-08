<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;
$sql = $db->Prepare("SELECT *
                       FROM compras co, proveedores pr 
                       WHERE co.id_Proveedor=pr.id_Proveedor
                       AND co.estado <>'0'
                       AND pr.estado <>'0'               
                       ORDER BY co.id_Compra DESC
                     
                       ");
$rs=$db->GetAll($sql);


$smarty->assign("compras",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("compras.tpl");
?>