<?php

session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

require('../modelo/conexion.php');

//casa y comuna
$ca=$_POST["casa"];
$co=$_POST["comuna"];



//lider
$nl= $_POST["nombrel"];
$tl= $_POST["telefonol"];
$cl= $_POST["cedulal"];



//menores
$nomm=$_POST["nombrem"];
$edm=$_POST["edadm"];

$nomm1=$_POST["nombrem1"];
$edm1=$_POST["edadm1"];

$nomm2=$_POST["nombrem2"];
$edm2=$_POST["edadm2"];

$nomm3=$_POST["nombrem3"];
$edm3=$_POST["edadm3"];

$nomm4=$_POST["nombrem4"];
$edm4=$_POST["edadm4"];


//familia
$nomf=$_POST["nombref"];
$cedf=$_POST["cedulaf"];
$apef=$_POST["apellidof"];
$off=$_POST["oficiof"];
$paref=$_POST["parentescof"];
$lugf=$_POST["lugarf"];
$puef=$_POST["puestof"];


$nomf1=$_POST["nombref1"];
$cedf1=$_POST["cedulaf1"];
$apef1=$_POST["apellidof1"];
$off1=$_POST["oficiof1"];
$paref1=$_POST["parentescof1"];
$lugf1=$_POST["lugarf1"];
$puef1=$_POST["puestof1"];


$nomf2=$_POST["nombref2"];
$cedf2=$_POST["cedulaf2"];
$apef2=$_POST["apellidof2"];
$off2=$_POST["oficiof2"];
$paref2=$_POST["parentescof2"];
$lugf2=$_POST["lugarf2"];
$puef2=$_POST["puestof2"];


$nomf3=$_POST["nombref3"];
$cedf3=$_POST["cedulaf3"];
$apef3=$_POST["apellidof3"];
$off3=$_POST["oficiof3"];
$paref3=$_POST["parentescof3"];
$lugf3=$_POST["lugarf3"];
$puef3=$_POST["puestof3"];


$nomf4=$_POST["nombref4"];
$cedf4=$_POST["cedulaf4"];
$apef4=$_POST["apellidof4"];
$off4=$_POST["oficiof4"];
$paref4=$_POST["parentescof4"];
$lugf4=$_POST["lugarf4"];
$puef4=$_POST["puestof4"];


//coordinador

$noc=$_POST["nombrec"];
$doc=$_POST["cedulac"];
$dirc=$_POST["direccionc"];
$telc=$_POST["telefonoc"];
$proc=$_POST["oficioc"];
$cumc=$_POST["cumpleañosc"];
$emac=$_POST["mailc"];
$barrc=$_POST["barrioc"];
$estc=$_POST["estratoc"];
$prodc=$_POST["serviciosc"];
$lugc=$_POST["lugarc"];
$puesc=$_POST["puestoc"];







$ya=new conexion();
//logeo
$ya->ingresar($nl,$tl,$cl,$ca);


//codigo y comuna
$ya->codigos($ca, $co);

//rompe1
$ya->casi($ca,$cl);









//coordinador

$ya->ingresar3($noc, $doc,  $dirc, $telc, $proc, $cumc, $emac, $barrc, $estc, $prodc, $lugc, $puesc);



//familia
$ya->ingresar2($nomf,$cedf,$apef,$off,$paref,$lugf,$puef,$doc,     
	           $nomf1,$cedf1,$apef1,$off1,$paref1,$lugf1,$puef1,$doc,    
	           $nomf2,$cedf2,$apef2,$off2,$paref2,$lugf2,$puef2,$doc,
	           $nomf3,$cedf3,$apef3,$off3,$paref3,$lugf3,$puef3,$doc,
	           $nomf4,$cedf4,$apef4,$off4,$paref4,$lugf4,$puef4,$doc);





//rompe2
$ya->casi1($doc,$cl);


//menores
$ya->ingresar1($nomm,$edm,$doc,   $nomm1,$edm1,$doc,   $nomm2,$edm2,$doc,   $nomm3,$edm3,$doc,   $nomm4,$edm4,$doc);

//cierre
$ya->cerrar();





?>