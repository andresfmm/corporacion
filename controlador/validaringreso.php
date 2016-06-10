<?php

session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}


require('../modelo/conexion.php');

$nom=$_POST["usuario"];
$cla=$_POST["clave"];


$ya=new conexion();
$ya->login($nom,$cla);
$ya->cerrar();
?>