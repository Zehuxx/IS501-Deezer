
<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo Deezer</title>
		<meta charset="UTF8">
	
	   <link rel="icon" href="img/fav.ico" type="image/x-icon">
	   <link rel="stylesheet" type="text/css" href="css/estilos.css">
	   <link href="css/bootstrap.min.css" rel="stylesheet">

	</head><br>
	<body style="background-image:url(img/Musica.png); color:#ffffff;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-xs-12">
          <button type="button" style="float: right;" class="btn btn-danger">Conectarse</button>
        </div>
        <center><div class="col-lg-12 col-md-12 col-xs-12 " style="padding-top: 40px">
             
     <strong><font size=60>Tu música. Tu flow.</font></strong><br>
     <font size=5>Disfruta de tu música donde quieras y cuando quieras.<br>
     Regístrate gratis<br>
   
   <div style="width: 300px">
   <button type="summit" class="btn btn-default btn-primary" style="width: 140px;  height: 40px; float: left;"><span style="float: left"><img src="img/facebook.png" width="30" height="25"> Facebook</span> </button>
   <button type="summit" class="btn btn-default btn-danger" style="width: 140px;  height: 40px;float: right;"><span style="float: left"><img src="img/google.png" width="30" height="25"> Google+</span></button><br><br>

    <input type="dirc" name="direccion" class="form-control"  style="width: 300px;height: 40px;float: center;" placeholder="Correo electrónico" >
    <input type="dirc" name="direccion" class="form-control"  style="width: 300px;height: 40px;float: center;" placeholder="Contraseña (6 caracteres mínimo)"  >
    <input type="dirc" name="direccion" class="form-control"  style="width: 300px;height: 40px;float: center;" placeholder="Nombre de usuario">

    <select  class="form-control" style="width: 150px; float: left;">
                   <option value="sexo">Sexo</option> 
                   <option value="mujer">Mujer</option>
                   <option value="hombre">Hombre</option>
    </select>
    
    <select  class="form-control" style="margin-bottom: 20px; width: 150px; float: right;">
                           <option value="edad">Edad</option> 
                              <?php
                                  for ($i=1; $i <100 ; $i++) { 
                                    echo "<option value=".$i.">".$i."</option>";
                                  }
                              ?>
    </select>
    
         <button id="Reg" class="btn btn-lg btn-primary" type="submit" style="width:300px">Registrarse</button><br>

              <h6>Al hacer clic en "Registrase", aceptas las condiciones</h7></br>generales de uso.</h7>

        </div></center>
      </div>
    </div>
	</body>
</html>