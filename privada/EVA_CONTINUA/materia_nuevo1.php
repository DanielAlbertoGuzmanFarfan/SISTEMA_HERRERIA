<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_carrera= $_POST["id_carrera"];
$materia= $_POST["materia"];
$alias= $_POST["alias"];
$nivel= $_POST["nivel"];


$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_carrera"] = $id_carrera;
$reg["materia"] = $materia;
$reg["alias"] = $alias;
$reg["nivel"] = $nivel;


if ($rs1) {
	header("Location: materias.php");
	exit();
} else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("materia_nuevo1.tpl");

}
?>