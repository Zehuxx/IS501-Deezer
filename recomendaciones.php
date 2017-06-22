<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Deezer</title>
	<link rel="icon" href="img/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/recomendaciones.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<style type="text/css">
		body{
			height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
		}
		ul{
          list-style:none;
       }
        a:link{
       	text-decoration:none;

       }

      
	</style>

</head>
<body>
		

			<div  class="col-lgj-2">
			<img src="img/deezer.png" width="130" height="50" id="fimage">
			<input type="text" class="form-control" placeholder="Buscar" id="buscador">
			<ul class="nav">

			    <li><a href="#"  class="si"> <p  >INICIO</p></a>

			    
			  </li>
			    <li><a href="#" class="si" ><p  >RECOMENDACIONES</p></a>
			  </li>
                <hr>
					<li >
					<a href="#" class="si">
					<span ><img src="img/goku.jpg" width="24" height="24" style="border-radius: 50%"></span>
                    Mi Musica<svg class="svg-icon icon2 svg-icon-settings settings"  viewBox="0 0 12 12" role="img" aria-labelledby="ariaIconLabel1" height="15" width="15"><g><path d="M12,6.66665365 L12,5.33334049 L10.5489016,4.97053954 C10.4304016,4.44503537 10.2228507,3.9544824 9.94365134,3.51272632 L10.7141009,2.22871398 L9.77119813,1.28595766 L8.48725024,2.0563135 C8.04550002,1.77706141 7.55490017,1.56951053 7.02940187,1.45101047 L6.66664779,0 L5.33334635,0 L4.97059813,1.4509636 C4.44504709,1.56941678 3.95444724,1.77701454 3.51265015,2.05626663 L2.22880187,1.28596352 L1.28589907,2.22871984 L2.05624905,3.51263257 C1.77699696,3.95443552 1.56944608,4.44504123 1.45099876,4.97059227 L0,5.33334049 L0,6.66665365 L1.45099876,7.02940773 C1.56944608,7.55491189 1.7770497,8.04556448 2.05624905,8.48736743 L1.28589907,9.77122743 L2.22880187,10.7140365 L3.51265015,9.94373337 C3.9544531,10.2229855 4.44505295,10.4305363 4.97059813,10.5489895 L5.33334635,12 L6.66664779,12 L7.02939601,10.5489368 C7.55484744,10.4304367 8.04549416,10.2228859 8.48724438,9.94368064 L9.77119227,10.7140365 L10.7140951,9.77122743 L9.94364548,8.48726782 C10.2228976,8.04546487 10.4303957,7.55491189 10.5488958,7.02940773 L12,6.66665365 L12,6.66665365 Z M3.5,6 C3.5,4.61928525 4.61930254,3.5 5.99995331,3.5 C7.38069746,3.5 8.5,4.61928525 8.5,6 C8.5,7.38071475 7.38069746,8.5 5.99995331,8.5 C4.61930254,8.5 3.5,7.38071475 3.5,6 L3.5,6 Z"></path></g></svg></a>
                     
                    <div class="hijo" id="hijo"  >
			    	<ul class="oculto" >
			    	<p class="titulo1">Cuenta<p>
			    	<hr>
				<li onclick="ifra(1)"><a href="#" >
				        <span class="glyphicon glyphicon-user icon "></span>
                        <span class="titulo">Ajustes de la cuenta</span>
                        <span class=" glyphicon glyphicon-chevron-right flecha"></span>
                     </a></li>
				<li ><a href="#">
					    <span class="glyphicon glyphicon-question-sign icon" style="background-color: #76d016"></span>
                        <span class="titulo">Ayuda</span>
                        <span class=" glyphicon glyphicon-chevron-right flecha"></span>
				</a>
				</li>
				<li ><a href="#">
					    <span class="glyphicon glyphicon-barcode icon" style="background-color: #8d05ad"></span>
                        <span class="titulo">Activar un código</span>
                        <span class=" glyphicon glyphicon-chevron-right flecha"></span>
				</a></li>
				<p class="titulo1">Audio<p>
			     <hr>
			     <li ><a href="#"> <label>Reproductor HTML5 <input type="checkbox"></label></a> </li>
			     <li><a href="#"> <label>Alta Calidad<input type="checkbox"></label></a></li>
			     <li><a href="#">Fader</a></li>
			     <p class="titulo1">¿Qué es Deezer?</p>
			     <hr>
			     <li><a href="#">Planes de Suscripción<span class=" glyphicon glyphicon-chevron-right flecha"></span></a></li>
			     <li><a href="#">Quiénes somos<span class=" glyphicon glyphicon-chevron-right flecha"></span></a></li>
			     <li><a href="#">Ventajas<span class=" glyphicon glyphicon-chevron-right flecha"></span></a></li>
			     <li><a href="#">Trabajos<span class=" glyphicon glyphicon-chevron-right flecha"></span></a></li>
			     <hr>
			    
			     <button class="btn btn-danger btn-block" style="padding-right: 10px" type="button"><span class="label">Cerrar sesión</span></button>
                 
			   </ul>
			     
			    </div>
                    
					</li>
                    	<li>
                    		<center><button class="boton">+ SUSCRIBIRSE</button></center>
                    	</li>
                    <li >
                    <a href="#" class="si" >
                    <span>
					<svg class="svg-icon icon3 svg-icon-love" viewBox="0 0 12 12" aria-hidden="true" height="16" width="16"><g><path d="M6.00011325,2.5 C6.00011325,2.5 5.00009438,1 3.25,1 C1.66669813,1 1.65327318e-16,2.25 0,4.5 C1.65327318e-16,7.5 6,11.5 6,11.5 C6,11.5 11.9999997,7.5 12,4.5 C12.0000002,2.25 10.3335284,1 8.75,1 C7.00013213,1 6.00011325,2.5 6.00011325,2.5 Z"></path></g></svg> </span>Canciones favoritas
                    </a>
                    
					</li>


					
                    <li>
                    <a href="#" class="si">
                    <span>
					<svg class="svg-icon icon3 svg-icon-playlist" viewBox="0 0 12 12" aria-hidden="true" height="16" width="16"><g><path d="M8,9.99224439 C8,11.1010972 6.88071187,12 5.5,12 C4.11928813,12 3,11.1010972 3,9.99224439 C3,8.88339158 4.11928813,7.98448877 5.5,7.98448877 C6.06280296,7.98448877 6.58216973,8.13384364 7,8.38589285 L7,2.36277306 L7,0.75552108 C7,0.201673187 7.42629719,-0.118924155 7.95813424,0.0412456698 L12,1.25850747 L12,3.26731057 C12,3.82115846 11.5737028,4.1417558 11.0418658,3.98158598 L8,3 L8,9.99224439 Z M0,0 L6,0 L6,1 L0,1 L0,0 L0,0 Z M0,2 L6,2 L6,3 L0,3 L0,2 L0,2 Z M0,4 L6,4 L6,5 L0,5 L0,4 L0,4 Z"></path></g></svg></span>Playlists
                    </a>
                    
					</li>
 

					
					<li >
					<a href="#" class="si">
					<span>
					<svg class="svg-icon icon3 svg-icon-album" viewBox="0 0 12 12" aria-hidden="true" height="16" width="16"><g><path d="M6,12 C2.68630007,12 0,9.31370447 0,6.00000293 C0,2.68627795 2.68630007,0 6,0 C9.31369993,0 12,2.68627795 12,6.00000293 C11.9999941,9.31370447 9.31369993,12 6,12 L6,12 L6,12 Z M6,2.99999854 C4.34315297,2.99999854 3.00000293,4.34313751 3.00000293,5.99999707 C3.00000293,7.65684491 4.34315297,8.99999561 6,8.99999561 C7.65684703,8.99999561 8.99999707,7.65684491 8.99999707,5.99999707 C8.99999707,4.34314337 7.65684703,2.99999854 6,2.99999854 L6,2.99999854 L6,2.99999854 Z M4,6 C4,4.89544508 4.89545094,4 6,4 C7.10454906,4 8,4.89544508 8,6 C8,7.10454906 7.10454906,8 6,8 C4.89545094,8 4,7.10454906 4,6 L4,6 Z M5,6 C5,6.55229635 5.44770365,7 6,7 C6.55229635,7 7,6.55229635 7,6 C6.99998828,5.44769193 6.55229635,5 6,5 C5.44770365,5 5,5.44769193 5,6 L5,6 Z"></path></g></svg></span>Albumes
                    </a>
                   
					</li>


					
					<li>
					<a href="#"  class="si">
					<span>
					<svg class="svg-icon icon3 svg-icon-time" viewBox="0 0 12 12" aria-hidden="true" height="16" width="16"><g><path d="M11,6 C11,3.23857625 8.76142375,1 6,1 C3.23857625,1 1,3.23857625 1,6 C1,8.76142375 3.23857625,11 6,11 C8.76142375,11 11,8.76142375 11,6 Z M7,6.50952148 L7,3.49047852 C7,3.21505737 6.77614237,3 6.5,3 C6.23193359,3 6,3.21959471 6,3.49047852 L6,6 L4.49538898,6 C4.2157526,6 4,6.22385763 4,6.5 C4,6.76806641 4.2217932,7 4.49538898,7 L6.50461102,7 C6.64282453,7 6.76543159,6.94531282 6.85409473,6.85665508 C6.94267961,6.76617647 7,6.64418681 7,6.50952148 Z" fill-rule="evenodd"></path></g></svg></span>Actividad
					</a>
					
					</li>


					
                    <li>
                    <a href="#" class="si">
                    <span>
					<svg class="svg-icon icon3 svg-icon-app" viewBox="0 0 12 12" aria-hidden="true" height="16" width="16"><g><path d="M0.375518305,6.90836424 C-0.126157409,6.40668852 -0.124187159,5.59134123 0.375518305,5.09163576 L5.09163576,0.375518305 C5.59331148,-0.126157409 6.40865877,-0.124187159 6.90836424,0.375518305 L11.6244817,5.09163576 C12.1261574,5.59331148 12.1241872,6.40865877 11.6244817,6.90836424 L6.90836424,11.6244817 C6.40668852,12.1261574 5.59134123,12.1241872 5.09163576,11.6244817 L0.375518305,6.90836424 L0.375518305,6.90836424 Z M8.56634425,6.00000601 L4.9734623,3.9469246 L4.9734623,8.0530754 L8.56634425,6.00000601 L8.56634425,6.00000601 Z"></path></g></svg></span>Aplicaciones
					</a>
				
					</li>
                    </ul>
                    		<div id="cover">
                    		<p class="nombresong"><a href="#" id="nombresong"  >Chuva de Arroz Juco</a></p>
                    		<p class="nombreartista">de<a href="#" id="nombreartista">calle 13</a></p>
                    	    </div>
           
          
		</div>
		</br></br>
		<div class="col-lgj-10" id="ifra">
			
				<p align="center">Recomendado hoy para ti.</p>
			<section class="main row">
			<div class="container-fluid">
				<article class="col-md-5">
				<p>Álbum</p>
				<p>Y si escuchas:</p>
				<button class="btn btn-link">The Perfect Melody</button></br>
				de
				<button class="btn btn-link">Zion</button>
				</article>

				<aside class="col-md-5">
					<img src="img/zion.jpg" height="350" width="350">
				</aside>
				<footer class="footer">
					<button class="btn btn-xs btn-default">
					<span class="glyphicon glyphicon-heart" aria-hidden="true">  Añadir a Mi música</button>
					<button class="btn btn-xs btn-default">
					<span class="glyphicon glyphicon-share" aria-hidden="true">  Compartir</button>
					<button class="btn btn-xs btn-default">
					<span class=" glyphicon glyphicon-comment" aria-hidden="true">  Comentar</button>

				</footer>
				
			</section>
			
		
		</div>	
</div>	</div>
 
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>

</body>
</html>