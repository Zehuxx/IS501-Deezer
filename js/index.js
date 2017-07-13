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
            $("#hijo").css({"visibility":"hidden","opacity":"0"});
            $("#hijo2").css({"visibility":"hidden","opacity":"0"});
            $("#hijo3").css({"visibility":"hidden","opacity":"0"});
            $("#hijo4").css({"visibility":"hidden","opacity":"0"});
            $("#hijo5").css({"visibility":"hidden","opacity":"0"});
            $("#drop").css({"visibility":"hidden","opacity":"0"});

        }

$("#drop").click(function(){
     $("#hijo").css({"visibility":"hidden","opacity":"0"});
    $("#drop").css({"visibility":"hidden","opacity":"0"});
});

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

function li(li){
    if (li=="li6") {
         $("#"+li).css("background-color","#191922");
         $("#li7").css("background-color","#23232c");
         $("#li8").css("background-color","#23232c");
         $("#li9").css("background-color","#23232c");
    }
    if (li=="li7") {
         $("#"+li).css("background-color","#191922");
         $("#li6").css("background-color","#23232c");
         $("#li8").css("background-color","#23232c");
         $("#li9").css("background-color","#23232c");
    }
    if (li=="li8") {
         $("#"+li).css("background-color","#191922");
         $("#li7").css("background-color","#23232c");
         $("#li6").css("background-color","#23232c");
         $("#li9").css("background-color","#23232c");
    }
    if (li=="li9") {
         $("#"+li).css("background-color","#191922");
         $("#li7").css("background-color","#23232c");
         $("#li8").css("background-color","#23232c");
         $("#li6").css("background-color","#23232c");
    }
   

}



function arreglo(borde,margen,borde2,margen2,borde3,margen3,borde4,margen4){
   $("#"+borde).addClass("bordee");
   $("#"+margen).addClass("margen");
   $("#"+borde2).removeClass("bordee");
   $("#"+margen2).removeClass("margen");
   $("#"+borde3).removeClass("bordee");
   $("#"+margen3).removeClass("margen");
   $("#"+borde4).removeClass("bordee");
   $("#"+margen4).removeClass("margen");
   $("#li6").css("background-color","#23232c");
   $("#li7").css("background-color","#23232c"); 
   $("#li8").css("background-color","#23232c");
   $("#li9").css("background-color","#23232c");
   if (margen== "first" ) {
       $("#"+margen).css("color","white");
       $("#first2").css("color","#C2C2CA");
       $("#first3").css("color","#C2C2CA");
       $("#first4").css("color","#C2C2CA");
   }else{
    if (margen=="first2") {
      $("#"+margen).css("color","white");
      $("#first").css("color","#C2C2CA");
      $("#first3").css("color","#C2C2CA");
      $("#first4").css("color","#C2C2CA");  
  }else{
   if (margen=="first4") {
    $("#"+margen).css("color","white");
    $("#first").css("color","#C2C2CA");
    $("#first2").css("color","#C2C2CA");
    $("#first3").css("color","#C2C2CA");
}else{
    if (margen=="first3") {
            $("#"+margen).css("color","white");
            $("#first").css("color","#C2C2CA");
            $("#first2").css("color","#C2C2CA");
            $("#first4").css("color","#C2C2CA");   
    }
}
}
}
}


function ver(div,div2,div3,div4,div5){
    if ($("#"+div).css("visibility")=="hidden"){
       $("#"+div2).css("visibility","visible"); 
       $("#"+div2).css("visibility","hidden");
       $("#"+div3).css("visibility","hidden");
       $("#"+div4).css("visibility","hidden");
       $("#"+div5).css("visibility","hidden");
    }

    if ($("#"+div).css("visibility")=="visible") {
        $("#"+div).css({"visibility":"hidden","opacity":"0"});
        $("#drop").css({"visibility":"hidden","opacity":"0"});
    }else{
        $("#"+div).css({"visibility":"visible","opacity":"1"});
        $("#drop").css({"visibility":"visible","opacity":"0.5"});
    }
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









$("#cola").hover(function(){
    $("#drop").css({"visibility":"visible","opacity":"0.5"});
},function(){
    $("#drop").css({"visibility":"hidden","opacity":"0"});
});



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