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
  <style>
    .padre-premios{
      display: flex;
      justify-content: space-evenly;
      margin-top: 10%;
    }
    .premios{
    width: 25vw;
    } 

    .premios p{
      font-size: 1.5em;
      color: white;
    }

    .premios span{
      color: red;
    }


  </style>
  <div class="padre-premios">
  <?php 

    $mysqli = new mysqli("localhost","root","","invitados");

   

    $extraerDatos1 = mysqli_query($mysqli, "SELECT * FROM sorteo ORDER BY RAND() LIMIT 1;");
    $extraerGanador1 = mysqli_fetch_array($extraerDatos1);
    $nombre1 = $extraerGanador1['nombre'];
    $ci1 = $extraerGanador1['ci'];
    $auto = "AUTO KWID ZEN 0KM";
    echo "
          <div class='premios'>
            <center>
            <h2>Ganad@r <span>{$nombre1}</span></h2>
            <img src='S.G.A/imagenes/auto.jpg'><br>
            <p>AUTO KWID ZEN 0KM</p>
            </center>
          </div>";

    mysqli_query($mysqli, "INSERT INTO ganadores (ci,nombre,premio) VALUES ('$ci1','$nombre1','$auto')");
    mysqli_query($mysqli, "DELETE FROM sorteo WHERE ci=$ci1");

 ?>
 </div>
 <form action="generarGanador.php">
    <button >Volver</button>
    </form>
</body>
</html>