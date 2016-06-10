function log(){
var us=document.getElementById('usuario').value
var cla=document.getElementById('clave').value

var url="controlador/validaringreso.php";

$.ajax({

type:"POST",
url:url,
data:{usuario:us, clave:cla},

success:function(dato){

	$("#mostrar").html(dato);
}

})
}


function crear_reg(){

//captura casa y comuna
var ca=document.getElementById("casa").value
var co=document.getElementById("comuna").value

if(co==""){
  alert('el campo comuna es obligatorio');
  }else{

if(ca==""){
  alert('el campo codigo es obligatorio');
  }else{

//captura formulario lider

var noml=document.getElementById('nombrel').value
var tell=document.getElementById('telefonol').value
var cedl=document.getElementById('cedulal').value



if(cedl==""){
	alert('el campo cedula de la tabla lider es obligatorio');
	}else{




//captura de formulario coordinador


var noc=document.getElementById('nombrec').value
var doc=document.getElementById('cedulac').value
var dirc=document.getElementById('direccionc').value
var telc=document.getElementById('telefonoc').value
var proc=document.getElementById('oficioc').value
var cumc=document.getElementById('cumpleañosc').value
var emac=document.getElementById('mailc').value
var barrc=document.getElementById('barrioc').value
var estc=document.getElementById('estratoc').value
var prodc=document.getElementById('serviciosc').value
var lugc=document.getElementById('lugarc').value
var puesc=document.getElementById('puestoc').value


if(doc==""){
            alert('el campo cedula de la tabla coordinador es obligatorio');
            }else{

//captura formulario menores		

var nomm=document.getElementById('nombrem').value
var edam=document.getElementById('edadm').value

var nomm1=document.getElementById('nombrem1').value
var edam1=document.getElementById('edadm1').value

var nomm2=document.getElementById('nombrem2').value
var edam2=document.getElementById('edadm2').value

var nomm3=document.getElementById('nombrem3').value
var edam3=document.getElementById('edadm3').value

var nomm4=document.getElementById('nombrem4').value
var edam4=document.getElementById('edadm4').value



// captura de formulario familia

var nof=document.getElementById('nombref').value
var cef=document.getElementById('cedulaf').value
var apf=document.getElementById('apellidof').value
var off=document.getElementById('oficiof').value
var parf=document.getElementById('parentescof').value
var luf=document.getElementById('lugarf').value
var puf=document.getElementById('puestof').value



var nof1=document.getElementById('nombref1').value
var cef1=document.getElementById('cedulaf1').value
var apf1=document.getElementById('apellidof1').value
var off1=document.getElementById('oficiof1').value
var parf1=document.getElementById('parentescof1').value
var luf1=document.getElementById('lugarf1').value
var puf1=document.getElementById('puestof1').value



var nof2=document.getElementById('nombref2').value
var cef2=document.getElementById('cedulaf2').value
var apf2=document.getElementById('apellidof2').value
var off2=document.getElementById('oficiof2').value
var parf2=document.getElementById('parentescof2').value
var luf2=document.getElementById('lugarf2').value
var puf2=document.getElementById('puestof2').value



var nof3=document.getElementById('nombref3').value
var cef3=document.getElementById('cedulaf3').value
var apf3=document.getElementById('apellidof3').value
var off3=document.getElementById('oficiof3').value
var parf3=document.getElementById('parentescof3').value
var luf3=document.getElementById('lugarf3').value
var puf3=document.getElementById('puestof3').value



var nof4=document.getElementById('nombref4').value
var cef4=document.getElementById('cedulaf4').value
var apf4=document.getElementById('apellidof4').value
var off4=document.getElementById('oficiof4').value
var parf4=document.getElementById('parentescof4').value
var luf4=document.getElementById('lugarf4').value
var puf4=document.getElementById('puestof4').value










var url="../controlador/validarcrear.php";

$.ajax({

type:"POST",
url:url,
data:{casa:ca, comuna:co,
  nombrel:noml, telefonol:tell, cedulal:cedl, nombrem:nomm, edadm:edam, 
 nombrem1:nomm1, edadm1:edam1,nombrem2:nomm2, edadm2:edam2,   
 nombrem3:nomm3, edadm3:edam3,   nombrem4:nomm4, edadm4:edam4,

  nombref:nof, cedulaf:cef, apellidof:apf, oficiof:off, parentescof:parf, lugarf:luf, puestof:puf,
  nombref1:nof1, cedulaf1:cef1, apellidof1:apf1, oficiof1:off1, parentescof1:parf1, lugarf1:luf1, puestof1:puf1,
   nombref2:nof2, cedulaf2:cef2, apellidof2:apf2, oficiof2:off2, parentescof2:parf2, lugarf2:luf2, puestof2:puf2,
    nombref3:nof3, cedulaf3:cef3, apellidof3:apf3, oficiof3:off3, parentescof3:parf3, lugarf3:luf3, puestof3:puf3,
      nombref4:nof4, cedulaf4:cef4, apellidof4:apf4, oficiof4:off4, parentescof4:parf4, lugarf4:luf4, puestof4:puf4,

 nombrec:noc, cedulac:doc, direccionc:dirc,  telefonoc:telc, oficioc:proc, cumpleañosc:cumc, mailc:emac, barrioc:barrc,
  estratoc:estc, serviciosc:prodc, lugarc:lugc, puestoc:puesc},

success:function(datos){

	$("#muestra").html(datos);
}



})

}
}
}
}
}