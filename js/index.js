function ifra(link){
    if (link==1)
    	$("#ifra").html('<iframe class="contenido" src="configuraciones.php" ></iframe>');
    if(link==2)
    	$("#ifra").html("<iframe class='contenido' src='notific.php' ></iframe>");
     if(link==3)
    	$("#ifra").html("<iframe class='contenido' src='disposi.php' ></iframe>");
}

function ifra2(link){
    if (link==1)
    	$("#ifra").html('<iframe src="informacion.php" ></iframe>');
    if(link==2)
    	$("#ifra").html("<iframe src='notificaciones.php' ></iframe>");
     if(link==3)
    	$("#ifra").html("<iframe src='dispositivos.php' ></iframe>");
}