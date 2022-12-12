<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ganadores</title>
</head>
<body>
  <h1>¡Felicidades!</h1>
  <style>
    .padre-premios{
      display: flex;
      justify-content: space-evenly;
      margin-top: 2%;
    }
    .premios{
    width: 30vw;
    } 

    .premios p{
      font-size: 1.5em;
      color: white;
    }

    .premios span{
      color: #ffffff;
    }

    .premios img{
      width: 100%;
    }

  </style>
  <div class="padre-premios">
  <?php 

    $mysqli = new mysqli("localhost","root","","invitados");

    $contador = 0;


  while($contador < 3){
    $contador = $contador + 1;
    $extraerDatos1 = mysqli_query($mysqli, "SELECT * FROM sorteo ORDER BY RAND() LIMIT 1;");
    $extraerPremio1 = mysqli_query($mysqli, "SELECT MIN(idpremio), idpremio, nombre, imagen FROM premios LIMIT 1;");
    $extraerGanador1 = mysqli_fetch_array($extraerDatos1);
    $extraerSorteo1 = mysqli_fetch_array($extraerPremio1);
    $nombre1 = $extraerGanador1['nombre'];
    $ci1 = $extraerGanador1['ci'];
    $idPremio = $extraerSorteo1['idpremio'];
    $premioNombre1 = $extraerSorteo1['nombre'];
    $premioImagen1 = $extraerSorteo1['imagen'];

    echo "
          <div class='premios'>
          <center>
            <h2><span>{$nombre1}</span></h2>
            <img src='{$premioImagen1}'><br>
            <p>{$premioNombre1}</p>
            </center>
          </div>";

    mysqli_query($mysqli, "INSERT INTO ganadores (ci,nombre,premio) VALUES ('$ci1','$nombre1','$premioNombre1')");
    mysqli_query($mysqli, "DELETE FROM sorteo WHERE ci=$ci1");
    mysqli_query($mysqli, "DELETE FROM premios WHERE idpremio='$idPremio'");
  }
    
    
 ?>
 </div>
    <div class="botonGanador">
      <a href="generarganador.php">
        <center>
        <div class="botonFalso2">
          <p>Volver</p> 
        </div>
      </center>
      </a>
    </div>
</body>
</html>



