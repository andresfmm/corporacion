
<?php



session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}


require('../modelo/coordinador.php');
error_reporting(0);
$ya= new coo();
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

    <br><br><br>


    	<div class="container-fluid ">

     <table class="table table-striped table-bordered table-hover ">
		<tr class="rojob">
		<th>consultar coordinador</th>
		<form method="POST">
        <td><input type="text" name="lip" class="form-control" placeholder="cedula coordinador"></td>     
        <td><input type="submit" name="lide" value="consultar datos" class="btn btn-primary"></td>
        <td><ul class="nav nav-pills">
            

         <br>

     

</ul>
 </td>  
 </th>
 </tr>
        </form>

      
 </div>

  </table> 

         

<form  method="POST">
<input style="color:#000000"  type="submit"  name="men" value="principal" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="es" value="ir estadisticas" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="lid" value="ir liderez" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="nores" value="ir a menores" class=" btn btn-info btn-lg">
</form>
<br>

<?php
if(isset($_POST["men"])){
  echo "<script>location.href='ingresar.html'</script>";
}


if(isset($_POST["es"])){
  echo "<script>location.href='consultar_menores.php'</script>";
}



if(isset($_POST["lid"])){
  echo "<script>location.href='consultar_liderez.php'</script>";
}



if(isset($_POST["nores"])){
  echo "<script>location.href='menoresedad.php'</script>";
}

?>

<h1>familia de este coordinador : &nbsp;&nbsp;<?php $ya->tete($_POST["lip"])?></h1>

  <div class="container-fluid pull-left col-md-12">                                       

<table class="table table-striped table-bordered table-hover ">
<tbody>
<tr class="active">
    <th>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    cedula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
     oficio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     parentesco</th>
	
</tr>


       <?php
         if(isset($_POST["lide"])){

            $t2=$_POST["lip"];
            $ya->cor($t2);
         }
        ?>
 
</tbody>	
</table>

</div> 






		</body>
		</html>