<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<h1>Bienvenid@s</h1>


<nav class="header__nav nav-bar">
		<div class="toggle-menu">
			<div class="line line1"></div>
			<div class="line line2"></div>
			<div class="line line3"></div>
		</div>
		<ul class="nav-list">
			<li class="nav-list-item"><a href="index.php" class="nav-link">Inicio</a></li>
			<li class="nav-list-item"><a href="generarganador.php" class="nav-link">Sorteos</a></li>
			<li class="nav-list-item">
				<a href="sorteoPrincipal.php" class="nav-link">Sorteo principal</a>
			</li>
		</ul>
	</nav>


<div class="contenedor">
    <form action="consultar.php" method="post">
      <div class="contenedor2">
        <a href="generarganador.php"><img src="LOGOS.gif" alt="" width="450px"></a>
      </div>
      <div class="margen">
        <h2>Ingrese su N° de documento <br> sin puntos ni guiones</h2>
        <label for="cedula"></label>
        <input type="number" name="cedula" id="cedula" placeholder="Documento" required />
        <button for="cedula" type="submit">INGRESAR</button><br>
      </div>
    </form>
</div>
   
<script src="js.js" ></script>
</body>
</html>