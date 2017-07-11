function ifra(link){
    if (link==1)
    	$("#ifra").html('<iframe class="contenido" src="configuraciones.php" frameborder="0"  ></iframe>');
    if(link==2)
    	$("#ifra").html("<iframe class='contenido' src='notific.php'frameborder='0' ></iframe>");
     if(link==3)
    	$("#ifra").html("<iframe class='contenido' src='disposi.php' frameborder='0' ></iframe>");
}
 
function ifra2(link){
    if (link==1)
    	$("#ifra2").html('<iframe class="contenido2" src="informacion.php" frameborder="0"></iframe>');
    if(link==2)
    	$("#ifra2").html("<iframe class='contenido2' src='notificaciones.php' frameborder='0'></iframe>");
     if(link==3)
    	$("#ifra2").html("<iframe class='contenido2' src='dispositivosconectados.php' frameborder='0'></iframe>");
}


function ifra3(link){
    if (link==1)
        $("#ifra3").html('<iframe class="contenido3" src="features.php" frameborder="0"  ></iframe>');
    if(link==2)
        $("#ifra3").html("<iframe class='contenido3' src='dispositivos.php'frameborder='0' ></iframe>");
     if(link==3)
        $("#ifra3").html("<iframe class='contenido3' src='ofertas.php' frameborder='0' ></iframe>");
    if(link==4)
        $("#ifra3").html("<iframe class='contenido3' src='company.php' frameborder='0' ></iframe>");
}

function reload(){
            var container = document.getElementById("nav");
            var content = container.innerHTML;
            container.innerHTML= content;
        }

function cambiarborde(id,id2,id3){

   $("#"+id).addClass("borderr");
   $("#"+id2).removeClass("borderr");
   $("#"+id3).removeClass("borderr");
}

function borde(id,id2,id3,id4){

   $("#"+id).addClass("borde");
   $("#"+id2).removeClass("borde");
   $("#"+id3).removeClass("borde");
   $("#"+id4).removeClass("borde");
}


function abrir(){
    if ($("#ventana").val()==3) {
       $("#fun").addClass("borde");
        $("#ifra3").html('<iframe class="contenido3" src="features.php" frameborder="0"  ></iframe>');
    }
    if ($("#ventana").val()==2) {
       $("#empr").addClass("borde");
       $("#ifra3").html("<iframe class='contenido3' src='company.php' frameborder='0' ></iframe>");
    }
    if ($("#ventana").val()==1) {
       $("#ofer").addClass("borde");
         $("#ifra3").html("<iframe class='contenido3' src='ofertas.php' frameborder='0' ></iframe>");
    }
}


$(".jp-mute").hover(function () {
    $("#barravol").removeClass("ocultoo");
    $("#volplus").removeClass("ocultoo");
    $("#ran").addClass("ocultoo");
    $("#repetir").addClass("ocultoo");
    $("#cola").addClass("ocultoo");
},function(){
 setTimeout(function(){
 $("#barravol").addClass("ocultoo");
 $("#volplus").addClass("ocultoo");
 $("#ran").removeClass("ocultoo");
 $("#repetir").removeClass("ocultoo");
 $("#cola").removeClass("ocultoo");
 }
 , 5000);
 
});

$(document).ready(function(){
    abrir();
});