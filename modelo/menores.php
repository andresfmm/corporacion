<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

class menores{

private $conexion;
private $server="localhost";
private $user="root";
private $pass="";
private $bd="corporacion";





public function __construct(){

$this->conexion=new mysqli($this->server, $this->user, $this->pas, $this->bd);
if($this->conexion->connect_errno){
	die('pendejo');
}
	
}




public function meme($r){
    $t=$r;

	$tt="select count(edadm) from menores where edadm<>'' and edadm<=$t";
    $tr=$this->conexion->query($tt);

    while($row=mysqli_fetch_array($tr)){
    
	echo $row[0];
}
}

//listado de comunas y casa de apoyo

public function comunas(){


	$a="select comuna, count(comuna) from codigos group by comuna desc";
	$ta=$this->conexion->query($a);
	while($t=mysqli_fetch_array($ta)){

       echo "<tr>";
       echo "<td>";
       echo  $t[0];

       echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";




 


        echo  $t[1];
        echo "</td>";
        echo "</tr>";

       


        
	}


}



//listado de liderez y casas de apoyo

public function rompe1(){


	$a="select nombrel, count(cedulal)  from codigos,lider,rompe1 where  codigos.codigo=rompe1.fk_codigo and lider.cedulal=rompe1.fk_cedulal GROUP BY nombrel,cedulal  ";
	$ta=$this->conexion->query($a);

	
	while($t=mysqli_fetch_array($ta)){

       echo "<tr>";
       echo "<td>";
       echo  $t[0];

       echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp"; 
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 echo "&nbsp";
 


        echo  $t[1];
        echo "</td>";
        echo "</tr>";

       


        
	}
}


public function tcasas(){

  $t1="select count(comuna) from codigos";
  $t2=$this->conexion->query($t1);
  while($row=mysqli_fetch_array($t2)){

       echo "<tr>";
       echo "<td>";
       echo  $row[0];
       echo  "</td>";
       echo "</tr>";



  }
}


public function tlider(){

  $t1="select count(nombrel) from lider";
  $t2=$this->conexion->query($t1);
  while($row=mysqli_fetch_array($t2)){

       echo "<tr>";
       echo "<td>";
       echo  $row[0];
       echo  "</td>";
       echo "</tr>";



  }
}


}


?>