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
.redondeada{
    border-radius: 50%;
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
                  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="bandas.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';

                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="blues.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="chill.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="clasica.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                      


                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="fiesta.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="hiphop.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="indie.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="jazz.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                   
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="verano.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="mixes.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="momentos.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="niños.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';

                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="nuevoslanz.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="pop.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="popular.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="reggae.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="rnb.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="rock.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';
                          echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="soul.png" class="img-responsive">'.
                              '</div>'.
                          '</div>';

              ?>
              <div>
              
        </div>
                      	  
                   </div>
                   
                        <div>
                          <center>
                              <button type="button" style="margin-top: 40px;margin-bottom: 20px" onclick="cerrarmodal2_y_abrir_modal3()" class="btn btn-primary start"  id="start">Continuar</button>
                           </center>
                           <button type="button" style="margin-top: 40px;margin-bottom: 20px" onclick="abrir_modal" class="btn btn-primary start"  id="start">atras</button>
            
                      </div> 
                       
                </div><!-- /.modal-content -->
                
              </div><!-- /.modal-dialog --> 
               
          </div><!-- /.modal -->
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-artistas" aria-hidden="true">
              
              <div class="modal-dialog" role="document" style="width:1100px" >
                <div class="modal-content">
                <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
                  <div class="modal-body"  >
                  <div style="margin-left: 20px;padding-top: 30px">
                      <p style="font-size: 30px;font-weight: 900;">¿Te gusta alguno de estos artistas? </p>
                         <p style="font-size: 18"></p>
                  </div>
                           
                  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-height: calc(100vh - 280px);
                   overflow-y: auto;">
              <?php
                  
                 	echo
                 	'<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="8.jpg" class="img-responsive redondeada">'.'<center>Sean Paul</center>'.

                              '</div>'.
                          '</div>';

                            echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="9.jpg" class="img-responsive redondeada">'.'<center>AC/DC</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="10.jpg" class="img-responsive redondeada">'.'<center>Danny Ocean</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="11.jpg" class="img-responsive redondeada">'.'<center>Luis Fonsi</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="12.jpg" class="img-responsive redondeada">'.'<center>Tito el Bambino</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="13.jpg" class="img-responsive redondeada">'.'<center>Warrant</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="14.jpg" class="img-responsive redondeada">'.'<center>David Guetta</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="15.jpg" class="img-responsive redondeada">'.'<center>Justin Bieber</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="16.jpg" class="img-responsive redondeada">'.'<center>Duane Stephenson</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="17.jpg" class="img-responsive redondeada">'.'<center>Bullet for my Valentine</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="18.jpg" class="img-responsive redondeada">'.'<center>Martin Garrix</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="19.jpg" class="img-responsive redondeada">'.'<center>Katy Perry</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="20.jpg" class="img-responsive redondeada">'.'<center>Cultura Profetica</center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="21.jpg" class="img-responsive redondeada">'.'<center>System of a Down </center>'.

                              '</div>'.
                          '</div>';

  echo
                  '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3  card-container">'.
                              '<div class="card-profile">'.
                                '<button type="button" class="btn btn-primary btn-xs" style="position: absolute;">'.
                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.
                                '</button>'.
                                '<img src="22.jpg" class="img-responsive redondeada">'.'<center>The Chainsmoker</center>'.

                              '</div>'.
                          '</div>';


                   
                      

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
function abrir_modal2(){
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