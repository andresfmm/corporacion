<?php



session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}


error_reporting(0);
require('../modelo/edad.php');
$ya=new edad();

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
        <td><input type="text" name="me" class="form-control" placeholder="edad o cedula"></td>     
        <td><input type="submit" name="menor" value="por edad" class="btn btn-primary" ></td>
        <td><input type="submit" name="menorcito" value="por cedula" class="btn btn-primary" ></td>
        <td><ul class="nav nav-pills">

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
<input style="color:#000000"  type="submit"  name="es" value="ir estadisticas" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="este" value="ir liderez" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="color:#000000"  type="submit"  name="lido" value="ir coordinadores" class=" btn btn-info btn-lg">
</form>
<br>


<?php
if(isset($_POST["men"])){
  echo "<script>location.href='ingresar.html'</script>";
}


if(isset($_POST["es"])){
  echo "<script>location.href='consultar_liderez.php'</script>";
}


if(isset($_POST["lido"])){
  echo "<script>location.href='consultar_coordinador.php'</script>";
}

if(isset($_POST["este"])){
  echo "<script>location.href='consultar_liderez.php'</script>";
}

?>







<br>



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
    edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
     coordinador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
     </th>
	
</tr>


       <?php
         if(isset($_POST["menor"])){

            $ta=$_POST["me"];
            $ya->meme($ta);
         }
        ?>


          <?php
         if(isset($_POST["menorcito"])){

            $ta=$_POST["me"];
            $ya->mema($ta);
         }
        ?>
 
</tbody>	
</table>

</div> 



</body>
</html>