<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre = $_POST["nombre1"];
$apellidos = $_POST["apellidos1"];
$telefono = $_POST["telefono1"];


//var_dump( $_POST);
//$db->debug=true;

//$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $nombre;
$reg["apellidos"] = $apellidos;
$reg["telefono"] = $telefono;
$rs1 = $db->AutoExecute("clientes1", $reg, "INSERT");
?>