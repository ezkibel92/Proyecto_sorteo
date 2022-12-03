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
   
    <div class="formulario-padre">
        <div class="formulario">
            <form action="consultar.php" method="post">

            <label for="cedula">Ingrese su CI sin puntos ni guiones</label><br>
            <input class="ingresar" id="cedula" type="numer" name="cedula" required><br>
            <button class="btn" for="cedula" type="submit">Ingresar</button>
            </form>
        </div>
    </div>
   

</body>
</html>