<?php

session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

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






    <link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function() {    
    $('#casa').blur(function(){

        $('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);

        var username = $(this).val();        
        var dataString = 'casa='+username;

        $.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>


  </head>
<body>

<?php


require('../modelo/veri.php');
?>
	<div container-fliud>
              <div class="rojo" role="alert"><center><h2 class="blanco">CORPORACION POPULAR LIBERAL DEL VALLE [CASA DE APOYO]</h2></center></div>
		</div>



	
     

       <form  method="POST">  
		<div class=" col-md-6 col-lg-6 pull-right">
  
	

      <label>codigo casa</label> <input type="text"  id="casa" placeholder="casa"> 

   
    <label> comuna</label> <input type="text"  id="comuna"  placeholder="comuna">
    <div id="Info"></div>

   



<h1>lider</h1>

<div class="form-group">
  
    <label  class="col-lg-4 control-label">nombre lider</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="nombrel" 
             placeholder="nombre y apellido" required>
    </div>

  </div>

  <div class="form-group">

    <label  class="col-lg-4 control-label">telefono lider</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="telefonol" 
             placeholder="telefono" required>
    </div>
  </div>

  <div class="form-group">

    <label  class="col-lg-4 control-label">cedula lider</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="cedulal" 
             placeholder="cedula" required>
    </div>
  </div>

  
<h1>menores</h1>

<div class="container col-lg-12">

<table class="table table-striped table-bordered table-hover ">

<tr class="active">
  
  <th>nombre</th>
  <th>edad</th>
  
<tr>

<tr class="rojob">
    <td><input type="text" class="form-control" id="nombrem"></td>
    <td><input type="text" class="form-control" id="edadm"></td>
<tr>

  <tr class="rojob">
    <td><input type="text" class="form-control" id="nombrem1"></td>
    <td><input type="text" class="form-control" id="edadm1"></td>
<tr>

  <tr class="rojob">
    <td><input type="text" class="form-control" id="nombrem2"></td>
    <td><input type="text" class="form-control" id="edadm2"></td>
<tr>


  <tr class="rojob">
    <td><input type="text" class="form-control" id="nombrem3"></td>
    <td><input type="text" class="form-control" id="edadm3"></td>
<tr>


  <tr class="rojob">
    <td><input type="text" class="form-control" id="nombrem4"></td>
    <td><input type="text" class="form-control" id="edadm4"></td>
<tr>



  
</table>
</div>




  

</div>

<h1>coordinador</h1>
	<div class=" col-md-6 col-lg-6">

     <div class="form-group">
    <label  class="col-lg-4 control-label">nombre coordinador</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="nombrec" 
             placeholder="nombre apellido coordinador" require>
    </div>
  </div>
  

 <div class="form-group">
    <label  class="col-lg-4 control-label">documento</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="cedulac" 
             placeholder="documento" require>
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">direccion</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="direccionc" 
             placeholder="direccion">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">telefono</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="telefonoc" 
             placeholder="telefono">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">profesion u oficio</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="oficioc" 
             placeholder="profesion u oficio">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">cumpleaños</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="cumpleañosc" 
             placeholder="cumpleaños">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">E-mail</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="mailc" 
             placeholder="E-mail">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">barrio</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="barrioc" 
             placeholder="barrio">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">estrato</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="estratoc" 
             placeholder="estrato">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">productos o servicios</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="serviciosc" 
             placeholder="productos o servicios">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">lugar de vatacion</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="lugarc" 
             placeholder="lugar de votacion">
    </div>
  </div>


   <div class="form-group">
    <label  class="col-lg-4 control-label">puesto</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="puestoc" 
             placeholder="puesto">
    </div>
    <br>
  </div>
  <h1>familia<h1>
</div>



 <div class="container">

<table class="table table-striped table-bordered table-hover ">
    <th>nombre y apellido</th>
  <th>cedula</th>
  
  <th>oficio</th>
  <th>parentesco</th>
  <th>lugar votacion</th>
  <th>puesto</th>
  <th>.</th>
<tr>

  <tr class="rojob">
    <td><input type="text" class="form-control" id="nombref"></td>
    <td><input type="text" class="form-control" id="cedulaf"></td>
      <td><input type="text" class="form-control" id="oficiof"></td>
       <td><input type="text" class="form-control" id="parentescof"></td>
        <td><input type="text" class="form-control" id="lugarf"></td>
         <td><input type="text" class="form-control" id="puestof"></td>
          <td ><input type="text" class="form-control" id="apellidof" size="2" disabled="true"></td>
<tr>

  <tr class="rojob">
        <td><input type="text" class="form-control" id="nombref1"></td>
    <td><input type="text" class="form-control" id="cedulaf1"></td>
      <td><input type="text" class="form-control" id="oficiof1"></td>
       <td><input type="text" class="form-control" id="parentescof1"></td>
        <td><input type="text" class="form-control" id="lugarf1"></td>
         <td><input type="text" class="form-control" id="puestof1"></td>
         <td><input type="text" class="form-control" id="apellidof1" disabled="true"></td>
<tr>

   <tr class="rojob">
       <td><input type="text" class="form-control" id="nombref2"></td>
    <td><input type="text" class="form-control" id="cedulaf2"></td>
      <td><input type="text" class="form-control" id="oficiof2"></td>
       <td><input type="text" class="form-control" id="parentescof2"></td>
        <td><input type="text" class="form-control" id="lugarf2"></td>
         <td><input type="text" class="form-control" id="puestof2"></td>
          <td><input type="text" class="form-control" id="apellidof2" disabled="true"></td>
<tr>

  <tr class="rojob">
        <td><input type="text" class="form-control" id="nombref3"></td>
    <td><input type="text" class="form-control" id="cedulaf3"></td>
      <td><input type="text" class="form-control" id="oficiof3"></td>
       <td><input type="text" class="form-control" id="parentescof3"></td>
        <td><input type="text" class="form-control" id="lugarf3"></td>
         <td><input type="text" class="form-control" id="puestof3"></td>
          <td><input type="text" class="form-control" id="apellidof3" disabled="true"></td>
<tr>

    <tr class="rojob">
       <td><input type="text" class="form-control" id="nombref4"></td>
    <td><input type="text" class="form-control" id="cedulaf4"></td>
      <td><input type="text" class="form-control" id="oficiof4"></td>
       <td><input type="text" class="form-control" id="parentescof4"></td>
        <td><input type="text" class="form-control" id="lugarf4"></td>
         <td><input type="text" class="form-control" id="puestof4"></td>
         <td><input type="text" class="form-control" id="apellidof4" disabled="true"></td>
<tr>

  
</table>
</div>

<div class="container-fluid">

<div class="pull-right">
<input style="color:#000000"   type="button" value="crear registro" onclick="crear_reg();" class=" btn btn-info btn-lg">
</div>


  
</form>


<!--boton consultar menores-->
<form action="consultar_menores.php" method="POST">
<div class="pull-left">
<input style="color:#000000"  type="submit"  name="menores" value="consultar cifras" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>




<!--boton consultar liderez-->
<form action="consultar_liderez.php" method="POST">
<div class="pull-left">
<input style="color:#000000"  type="submit"  name="menores" value="consultar liderez" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>




<!--boton consultar coordinadores-->
<form action="consultar_coordinador.php" method="POST">
<div class="pull-left">
<input style="color:#000000"  type="submit"  name="menores" value="consultar coordinadores" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>





<!--boton consultar coordinadores-->
<form action="menoresedad.php" method="POST">
<div class="pull-left">
<input style="color:#000000"  type="submit"  name="menores" value="consultar menores" class=" btn btn-info btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>
</div>










<div id="muestra">

</div>

	
	
</body>
</html>

