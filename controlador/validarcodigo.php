<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}
//casa y comuna
echo $c=$_POST["codi"];


?>