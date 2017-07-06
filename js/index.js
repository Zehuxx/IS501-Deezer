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

function reload(){
            var container = document.getElementById("barrra");
            var content = container.innerHTML;
            container.innerHTML= content;
        }

function cambiarborde(id,id2,id3){

   $("#"+id).addClass("borderr");
   $("#"+id2).removeClass("borderr");
   $("#"+id3).removeClass("borderr");
}

$("#playy").click(function(){
    if ($("#pausee").hasClass("ocultoo")) {
       $("#playy").addClass("ocultoo");
       $("#pausee").removeClass("ocultoo");
       
    }
});

$("#pausee").click(function(){
    if ($("#playy").hasClass("ocultoo")) {
       $("#pausee").addClass("ocultoo");
       $("#playy").removeClass("ocultoo");
       
    }
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

