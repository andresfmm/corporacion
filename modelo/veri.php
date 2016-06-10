<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

$conexion=mysql_connect('localhost','root','');

if(!$conexion){

echo ('no se pudo conectar'.mysql_error);

}else{
	mysql_select_db('corporacion',$conexion); 
}

?>
