<?php
session_start();
if(!$_SESSION["usu"]){

  header('location: ../');
}

class edad{

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

	$tt="select nombrem,edadm,fk_coo from menores where edadm<>'' and edadm<=$t";
    $tr=$this->conexion->query($tt);

    while($row=mysqli_fetch_array($tr)){
    
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
        echo "&nbsp";
        echo "&nbsp";
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

        echo "</td>";

        echo "</tr>";

}
}











public function mema($r){
    $t=$r;

  $tt="select nombrem,edadm,fk_coo from menores where edadm<>'' and fk_coo=$t";
    $tr=$this->conexion->query($tt);

    while($row=mysqli_fetch_array($tr)){
    
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
        echo "&nbsp";
        echo "&nbsp";
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

        echo "</td>";

        echo "</tr>";

}
}





}


?>