<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$carrera1 = $_POST["carrera1"];
$direccion1 = $_POST["direccion1"];
$telefono1 = $_POST["telefono1"];
$grado_academico1 = $_POST["grado_academico1"];
$descripcion1 = $_POST["descripcion1"];
$duracion1 = $_POST["duracion1"];

//var_dump( $_POST);
//$db->debug=true;

//$smarty = new Smarty;

$reg = array();
$reg["id_Herreria"] = 1;
$reg["carrera"] = $carrera1;
$reg["direccion"] = $direccion1;
$reg["telefono"] = $telefono1;
$reg["grado_academico"] = $grado_academico1;
$reg["descripcion"] = $descripcion1;
$reg["duracion"] = $duracion1;
$rs1 = $db->AutoExecute("carreras", $reg, "INSERT");
?>