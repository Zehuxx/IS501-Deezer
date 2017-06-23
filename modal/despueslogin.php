<!DOCTYPE html>
<html>
<head>
	<title>despueslogin</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/facebook.css">

<style type="text/css">
	.titulo{
    color: black;
    margin-bottom: 10px;
    padding-top: 24px;
    font-family: "Open Sans",Arial,sans-serif;
    font-weight: 400;
    font-size: 18px;
    letter-spacing: .25px;
	}


	.subtitulo{
    color: #72727d;
    margin-bottom: 10px;
    padding-top: 24px;
    font-family: "Open Sans",Arial,sans-serif;
    font-weight: 400;
    font-size: 14px;
    letter-spacing: .25px;
	}

	.start{
		padding-right: 70px;
		padding-left:70px;
	}


</style>
</head>
<body>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-inicio">
              
              <div class="modal-dialog" role="document"  style="width:1000px;height:800px" >
                <div class="modal-content">
                   <div >
                    <h4 class="modal-title" id="myModalLabel"><center><p class="titulo">Es un placer verte</p></center></h4>
                    <hr>
                  </div>
                  
                  <div class="modal-body">
                      <center>
                         <img src="foto1.png" style="width: 250px;height: 330px;">
                        <div >
                        	<p class="subtitulo">Para que podamos contruir tu Deezer y crear tu Flow necesitamos que nos respondas a<br> un par de preguntas</p>
                        </div>    
                      </center>
                       <div style="padding-top: 10px;padding-bottom: 10px">
                          <center>
                              <button type="button" onclick="cerrar_modal1_y_abrir_modal2()" class="btn btn-primary start"  id="start">INICIAR</button>
                           </center>
                      </div> 
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-generos">
              
              <div class="modal-dialog" role="document" style="width:1100px" >
                <div class="modal-content">
                  <div class="modal-body"  >
                  <div style="margin-left: 20px;padding-top: 30px">
                      <p style="font-size: 30px;font-weight: 900;">¿Que tipo de musica te gusta?</p>
                         <p style="font-size: 18">Elige uno para empezar</p>
                  </div>
                           
                  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="max-height: calc(100vh - 280px);
                   overflow-y: auto;">
              <?php
                 for ($i=0; $i <19 ; $i++) { 
                 	echo
                 	'<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="dance.png" class="img-responsive" >'.
                              '</div>'.
                          '</div>';
                 }

              ?>
                      	  
                   </div>
                   
                        <div>
                          <center>
                              <button type="button" style="margin-top: 40px;margin-bottom: 20px" onclick="cerrarmodal2_y_abrir_modal3()" class="btn btn-primary start"  id="start">Continuar</button>
                           </center>
                     
                      </div> 
                       
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-artistas">
              
              <div class="modal-dialog" role="document" style="width:1100px" >
                <div class="modal-content">
                  <div class="modal-body"  >
                  <div style="margin-left: 20px;padding-top: 30px">
                      <p style="font-size: 30px;font-weight: 900;">cambia la info por fots de artistas..... ahh y el texto </p>
                         <p style="font-size: 18">Elige uno para empezar</p>
                  </div>
                           
                  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-height: calc(100vh - 280px);
                   overflow-y: auto;">
              <?php
                 for ($i=0; $i <19 ; $i++) { 
                 	echo
                 	'<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="dance.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                 }

              ?>
                      	  
                   </div>
                   
                        <div>
                          <center>
                              <button type="button" style="margin-top: 40px;margin-bottom: 20px" onclick="cerrarmodal2_y_abrir_modal3()" class="btn btn-primary start"  id="start">Continuar</button>
                           </center>
                     
                      </div> 
                       
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    abrir_modal1();

	});
		function abrir_modal1(){
	$("#modal-inicio").modal("show");
};

function cerrar_modal1_y_abrir_modal2(){
	$("#modal-inicio").modal("hide");
	$("#modal-generos").modal("show");
}


function cerrarmodal2_y_abrir_modal3(){
	$("#modal-generos").modal("hide");
	$("#modal-artistas").modal("show");
};


	
	</script>
</body>
</html>