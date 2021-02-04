<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/html" href="index.html">
</head>
<body>
	<header>
<header class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<img src="baner.JPG" alt="">
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="All categories.html">BALLONS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">INVITATIONS & STATIONERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">THEME PARTIES</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="#">PARTY DECORATIONS</a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PERSONALIZED PARTY SUPPLIES</a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">CONTACTO</a>
       </li>
    </ul>
  </div>
</nav>
	</div>
		</div>
	
	</header>
	<section>
	<div align="center">
		<?php
		if(isset($_POST['txtnom'])){
			$asunto ="Solicitud de Informacion";
			$mensaje="El usuario:".$_POST['txtnom']." ha solicitado informacion de sitio 
sus datos son:".$_POST['txttel'].$_POST['txtmail'].$_POST['txtobs'];
			$destino = "2520360002moreno@gmail.com";
			$remitente = "From:2520360002moreno@gmail.com";

			@mail($destino,$asunto,$mensaje,$remitente);
		
			echo "Gracias por sus comentarios";
			}else{
		?>
		<h1>Formulario de Contacto</h1>
		<form method="post" action="contacto.php" name="frmcontacto">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="txtnom" required placeholder="Nombre usuario"></td>	
			</tr>
			<tr>
				<td>Telefono</td>
				<td><input type="text" name="txttel" required placeholder="Numero telefonico"></td>	
			</tr>
			<tr>
				<td>correo</td>
				<td><input type="text" name="txtmail" required placeholder="Direccion de correo"></td>	
			</tr>
			<tr>
				<td>Comentarios</td>
				<td>
				<textarea cols="30" rows="5" name="txtobs" required placeholder="Asunto"></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="2">
				<input type="submit" value="Enviar"/>

				
				</th>
			</tr>
		</table>
	
	
	</form>
	<?php }?>
</div>
	
	<footer>
		<div>
			<div class="colum4">© 2021 Magneto Demo Store. All Rights Reserved.</div>
			<div class="colum5">
				<img src="baner5.jpg">
			</div>
	    </div>
	</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>