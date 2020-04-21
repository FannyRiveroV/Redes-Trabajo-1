 <!DOCTYPE html>
 <html>
 <head>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="navbar-fixed">
        <nav class="blue darken-1">
	    <div class="nav-wrapper container">
            <a href="#" class="brand-logo right">Web Services</a>
            <ul class="left">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="rut.php">Validacion digito verificador</a></li>
                <li><a href="nombre.php">Nombre propio</a></li>
            </ul>
        </div>
        </nav>
    </div>    
    <br><br><br>
    <div class="row">
	<div class="col s2 white"></div>
        <div class="col s8 ">
 			<form action="" method="post" >
				<i class="material-icons prefix">textsms</i>
				<input type="text" id="rut" name='rut'>
				<label for="rut">Ingrese rut formato XXXXXXXX-X</label>
				<button type="submit">Enviar</button>
			</form>
		</div>
    <div class="col s2 white"></div>
    </div>
 </body>
 </html>