<?php


session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}


require('../modelo/veri.php');

sleep(1);




if($_REQUEST)
{
	$username 	= $_POST['casa'];
	 
    $f4=mysql_query("select * from codigos where codigo = '$username' ");
    $f5=mysql_num_rows($f4);
    if($f5>0){
		echo '<div id="Error">Codigo ya existente</div>';
	}
	else
	{
		echo '<div id="Success">Codigo Disponible</div>';
	}
	
}?>

