<?php 
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_Herreria = $_REQUEST["id_Herreria"];
$__Nombre = $_POST["Nombre"];
$__direccion = $_POST["direccion"];
$__correo = $_POST["correo"];
$__telefono = $_POST["telefono"];

$__logo1 = $_POST["logo1"];
$__nombre_log = $_FILES["logo"]['name'];

//$db->debug=true;
$smarty = new Smarty;

if ((!empty($_FILES['logo'])) and is_uploaded_file($_FILES['logo']['tpm_name'])) {
	copy($_FILES['logo']['tpm_name'],'logos/'.$__nombre_log);
	$logo = $_FILES['logo']['name'];
}elseif($__logo1 == "")
´      $logo = '';
       $__nombre_log = '';
}else
$__nombre_log = $__logo1;


$reg = array();
$reg["Nombre"] = $__Nombre;
$reg["direccion"] = $__direccion;
$reg["logo"] = $__nombre_log;
$reg["correo"] = $__correo;
$reg["telefono"] = $__telefono;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("Herreria", $reg, "UPDATE", "id_Herreria='".$__id_Herreria."'");

if ($rs1) {
	$smarty->assign("mensaje", "Los datos se modificaron ACTUALIZAR EL SISTEMA !!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("herreria1.tpl");
} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("herreria1.tpl");
}
?>
