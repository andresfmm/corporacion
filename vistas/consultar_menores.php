
<?php



session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}


error_reporting(0);
require('../modelo/menores.php');

$ya=new menores();



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<title>CORPORACION POPULAR LIBERAL DEL VALLE</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

		    <link type="text/css" rel="stylesheet" href="../estilos/estilos.css">
        <link  rel="stylesheet" href="../css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
		<script src="../jq.js"></script>
		<script src="../controlador/script.js"></script>
		<script src="../controlador/jquery-1.11.3.js"></script>
  </head>
<body>
	<div container-fliud>
              <div class="rojo" role="alert"><center><h2 class="blanco">CORPORACION POPULAR LIBERAL DEL VALLE [CASA DE APOYO]</h2></center></div>
		</div>
		<br>
		<br>
		<br>
		
<div class="container ">

     <table class="table table-striped table-bordered table-hover " >
		<tr class="rojob">
		<th>consultar menores de :<?php echo $_POST["me"]; ?> años</th>
		<form method="POST">
        <td><input type="text" name="me" class="form-control" placeholder="edad"></td>     
        <td><input type="submit" name="menor" value="consultar datos" class="btn btn-primary" disabled="true"></td>
        <td><ul class="nav nav-pills">
<li class="active"><a href="#">total <span class="badge">  <?php
if(isset($_POST["menor"])){

$na=$_POST["me"];

	
$ya->meme($na);
  
}
?>  </span></a></li>
</ul>
  </td>  
 </th>
  </tr>
        </form>

      
 </div>
  </table> 

<br>

<form  method="POST">
<input style="color:#000000"  type="submit"  name="men" value="principal" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="lide" value="ir a liderez" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="co" value="ir a coordinadores" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="nores" value="ir a menores" class=" btn btn-info btn-lg">
</form>

<?php
if(isset($_POST["men"])){
  echo "<script>location.href='ingresar.html'</script>";
}


if(isset($_POST["lide"])){
  echo "<script>location.href='consultar_liderez.php'</script>";
}


if(isset($_POST["co"])){
  echo "<script>location.href='consultar_coordinador.php'</script>";
}



if(isset($_POST["nores"])){
  echo "<script>location.href='menoresedad.php'</script>";
}

?>



<br><br>

  <!--tabla comunas-->

        <div class="container-fluid pull-left col-md-4">                                       

<table class="table table-striped table-bordered table-hover ">

<tr class="active">
    <th>comuna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    casas de apoyo</th>
	
</tr>


     <?php $ya->comunas();?> 
 
	
</table>

</div> 


     <div class="container-fluid pull-center col-md-2">                                       
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover ">

<tr class="active">
    <th>total casas</th>
  
</tr>


     <?php $ya->tcasas();?> 
 
  
</table>
</div>
</div>

<!--tabla lideres ycasa-->


        <div class="container-fluid pull-center col-md-4">                                       

<table class="table table-striped table-bordered table-hover ">

<tr class="active">
    <th>lider &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   casas de apoyo</th>
	
</tr>


     	<?php $ya->rompe1();?>
 
	
</table>

</div>


     <div class="container-fluid pull-right col-md-2">                                       
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover ">

<tr class="active">
    <th>total liderez</th>
  
</tr>


     <?php $ya->tlider();?> 
 
  
</table>
</div>
</div>


     

    
		
     




		</body>
		</html>
