<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

class coo{

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


public function cor($t1){

     $t2=$t1;

   $a="select nombref,cedulaf,oficiof,parentescof from familia where   fk_coordinador='$t2' ";
	$ta=$this->conexion->query($a);

	while($row=mysqli_fetch_array($ta)){

       echo "<tr>";
       echo "<td style='text-align: center; vertical-align: middle; '>";
      
       echo  $row[0];


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
        echo "&nbsp";
        echo "&nbsp";


        
        echo  $row[1];
 
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

         echo  $row[2];
          


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

        echo  $row[3];

         

        echo  $row[4];
        echo "</td>";
        echo "</tr>";


}

}





public function tete($ta){

     $tu=$ta;


     $a="select nombrec from coordinador where documentoc= '$tu' ";
    $ta=$this->conexion->query($a);


    while($row=mysqli_fetch_array($ta)){

          echo $row[0];

    }
  
}








}
