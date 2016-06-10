<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

class conexion{

private $conexion;
private $server="localhost";
private $user="root";
private $pass="";
private $bd="corporacion";


//login
private $usu;
private $contra;




//casa y comuna
private $cod;
private $com;

//lider
private $nombl;
private $telel;
private $cedul;
private $cas;



//menores
private $nomm;
private $edm;

private $nomm1;
private $edm1;

private $nomm2;
private $edm2;

private $nomm3;
private $edm3;

private $nomm4;
private $edm4;



//familia

private $yo1;
private $yo2;
private $yo3;
private $yo4;
private $yo5;


private $nomf;
private $cedf;
private $apef;
private $ofif;
private $parf;
private $lugf;
private $puf;


private $nomf1;
private $cedf1;
private $apef1;
private $ofif1;
private $parf1;
private $lugf1;
private $puf1;


private $nomf2;
private $cedf2;
private $apef2;
private $ofif2;
private $parf2;
private $lugf2;
private $puf2;


private $nomf3;
private $cedf3;
private $apef3;
private $ofif3;
private $parf3;
private $lugf3;
private $puf3;


private $nomf4;
private $cedf4;
private $apef4;
private $ofif4;
private $parf4;
private $lugf4;
private $puf4;


// coordinador

private $noc;
private $doc;
private $dirc;
private $telc;
private $proc;
private $cumc;
private $emac;
private $barrc;
private $estc;
private $prodcosc;
private $lugc;
private $puesc;







public function __construct(){

$this->conexion=new mysqli($this->server, $this->user, $this->pass, $this->bd);




}




public function cerrar(){

	$this->conexion->close();
}




public function login($us,$con){
 
 $this->usu=mysql_escape_string(htmlspecialchars($us));
 $this->contra=mysql_real_escape_string(htmlspecialchars($con));

 $query="select usuario from admin where usuario='".$this->usu."'  and clave='".$this->contra."'   ";
 $consulta=$this->conexion->query($query);

 if($row=mysqli_fetch_array($consulta)){

 	session_start();
 	$_SESSION["usu"]=$row["usuario"];
 	
     
 	echo "<script>location.href='vistas/ingresar.php'</script>";


 }else{
$cadena = "usuario o contraseña incorrectos."; 
$color = "#FF0000"; 
echo "<p><font color='".$color."'>".$cadena."</font></p>";
}



}

public function codigos($k,$ko){
	$this->cod=$k;
	$this->com=$ko;


	$sql="insert into codigos (codigo,comuna)values('".$this->cod."', '".$this->com."') ";
	$this->conexion->query($sql);
		 
}


public function ingresar($noml,$tell, $cedl){

$this->nombl=$noml;
$this->telel=$tell;
$this->cedul=$cedl;




$crel="insert into lider (nombrel,cedulal,cell)values('".$this->nombl."', '".$this->cedul."', '".$this->telel."') ";
$this->conexion->query($crel);


}

public function casi($aa, $bb){

   $a=$aa;
   $b=$bb;
	$rr="insert into rompe1(fk_cedulal, fk_codigo)values('$b', '$a')";
    $this->conexion->query($rr);
}







public function ingresar3($no, $do, $dir, $tel, $pro, $cum, $ema, $barr, $est, $prodcos, $lug, $pues){



$this->noc=$no;
$this->doc=$do;
$this->dirc=$dir;
$this->telc=$tel;
$this->proc=$pro;
$this->cumc=$cum;
$this->emac=$ema;
$this->barrc=$barr;
$this->estc=$est;
$this->prodcosc=$prodcos;
$this->lugc=$lug;
$this->puesc=$pues;




$crecoo="insert into coordinador (nombrec,documentoc,direccionc,telefonoc,profesionc,cumplec,mailc,barrioc,estratoc,productosc,lugarc,puestoc)values('".$this->noc."', '".$this->doc."','".$this->dirc."', '".$this->telc."','".$this->proc."','".$this->cumc."','".$this->emac."','".$this->barrc."','".$this->estc."','".$this->prodcosc."','".$this->lugc."','".$this->puesc."')";



$this->conexion->query($crecoo);


}


//ingreso familia

public function ingresar2($nomf,$cedf,$apef,$ofif,$parf,$lugf,$puf,$ff, 
	                      $nomf1,$cedf1,$apef1,$ofif1,$parf1,$lugf1,$puf1,$ff1,
	                      $nomf2,$cedf2,$apef2,$ofif2,$parf2,$lugf2,$puf2,$ff2,
	                      $nomf3,$cedf3,$apef3,$ofif3,$parf3,$lugf3,$puf3,$ff3,
	                      $nomf4,$cedf4,$apef4,$ofif4,$parf4,$lugf4,$puf4,$ff4){
	$this->yo1=$ff;
	$this->yo2=$ff1;
	$this->yo3=$ff2;
	$this->yo4=$ff3;
	$this->yo5=$ff4;

$this->nomf=$nomf;
$this->cedf=$cedf;
$this->apef=$apef;
$this->ofif=$ofif;
$this->parf=$parf;
$this->lugf=$lugf;
$this->puf=$puf;



$this->nomf1=$nomf1;
$this->cedf1=$cedf1;
$this->apef1=$apef1;
$this->ofif1=$ofif1;
$this->parf1=$parf1;
$this->lugf1=$lugf1;
$this->puf1=$puf1;


$this->nomf2=$nomf2;
$this->cedf2=$cedf2;
$this->apef2=$apef2;
$this->ofif2=$ofif2;
$this->parf2=$parf2;
$this->lugf2=$lugf2;
$this->puf2=$puf2;


$this->nomf3=$nomf3;
$this->cedf3=$cedf3;
$this->apef3=$apef3;
$this->ofif3=$ofif3;
$this->parf3=$parf3;
$this->lugf3=$lugf3;
$this->puf3=$puf3;


$this->nomf4=$nomf4;
$this->cedf4=$cedf4;
$this->apef4=$apef4;
$this->ofif4=$ofif4;
$this->parf4=$parf4;
$this->lugf4=$lugf4;
$this->puf4=$puf4;

$crefa="insert into familia (nombref,cedulaf,oficiof,parentescof,lugarf,puestof,fk_coordinador)values('".$this->nomf."', '".$this->cedf."', '".$this->ofif."','".$this->parf."','".$this->lugf."','".$this->puf."','".$this->yo1."'),
('".$this->nomf1."', '".$this->cedf1."', '".$this->ofif1."','".$this->parf1."','".$this->lugf1."','".$this->puf1."','".$this->yo2."'),
('".$this->nomf2."', '".$this->cedf2."', '".$this->ofif2."','".$this->parf2."','".$this->lugf2."','".$this->puf2."','".$this->yo3."'),
('".$this->nomf3."', '".$this->cedf3."', '".$this->ofif3."','".$this->parf3."','".$this->lugf3."','".$this->puf3."','".$this->yo4."'),
('".$this->nomf4."', '".$this->cedf4."', '".$this->ofif4."','".$this->parf4."','".$this->lugf4."','".$this->puf4."','".$this->yo5."')";


$this->conexion->query($crefa);


}





public function casi1($co, $ca){

   $c1=$co;
   $c2=$ca;
   
  
	$ff="insert into rompe2(fk_coordinador,fk_lider)values('$c1','$c2')";
    $this->conexion->query($ff);
    
}


//ingreso menores
public function ingresar1($nomm,$edm,$ta,  $nomm1,$edm1,$tb,  $nomm2,$edm2,$tc,  $nomm3,$edm3,$td,  $nomm4,$edm4,$te){

	$t1=$ta;
	$t2=$tb;
	$t3=$tc;
	$t4=$td;
	$t5=$te;

$this->nomm=$nomm;
$this->edm=$edm;

$this->nomm1=$nomm1;
$this->edm1=$edm1;

$this->nomm2=$nomm2;
$this->edm2=$edm2;

$this->nomm3=$nomm3;
$this->edm3=$edm3;

$this->nomm4=$nomm4;
$this->edm4=$edm4;




$crem="insert into menores (nombrem,edadm,fk_coo)values ('".$this->nomm."', '".$this->edm."','$t1'), ('".$this->nomm1."', '".$this->edm1."','$t2'),
('".$this->nomm2."', '".$this->edm2."','$t3'), ('".$this->nomm3."', '".$this->edm3."','$t4'),  ('".$this->nomm4."', '".$this->edm4."','$t5')";

$this->conexion->query($crem);

echo "<script>alert('usuario registrado con exito')</script>";
echo "<script>location.href='ingresar.html'</script>";



}





}



?>