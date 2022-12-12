<html>
<?php 
    
        $mysqli = new mysqli("localhost","root","","invitados");
    


        $cedula = $_POST["cedula"];

        $extraercedula = mysqli_query($mysqli, "SELECT * FROM personas WHERE ci = $cedula");

        $arrayDeDatos = mysqli_fetch_array($extraercedula);

        $fecha = "2022-09-16";
        $fechaLimite = date("Y-m-d", strtotime($fecha));
        $ci;
        $nombre;
        $antiguedad;
        $cargo;
        


            if (isset($arrayDeDatos['ci'])){

                $ci = $arrayDeDatos['ci'];
                $nombre = $arrayDeDatos['nombre'];
                $antiguedad = date("Y-m-d", strtotime($arrayDeDatos['antiguedad']));
                $cargo = $arrayDeDatos['cargo'];

                echo "
                <link rel='stylesheet' href='style.css'>
                    <h1>Bienvenid@s</h1>
                    <div class='contenedor'>
                    <form action='index.html' target='' method='get' name='Validación para ingreso'>
                    <div class='margenCIerror'>
                        <h2>Bienvenid@</h2>
                        <h2>{$nombre}</h2>
                    </div>
                      <div class='contenedorLogo'>
                        <img src='LOGOS.gif' alt='' width='450px'>
                      </div>
                    </form>
                </div>
                ";

                if($antiguedad < $fechaLimite && $cargo == 1){

                    mysqli_query($mysqli, "INSERT INTO sorteo (ci,nombre) VALUES ('$ci','$nombre')");

                    mysqli_query($mysqli, "DELETE FROM personas WHERE ci=$ci");
                }
              
            }else{


                echo "<link rel='stylesheet' href='style.css'>
                        <h1>¡Vuelva a ingresar su documento!</h1>
                        <div class='contenedor'>
                        <form action='index.html' target='' method='get' name='Validación para ingreso'>
                        <div class='margenCIerror'>
                         <h2>El documento ingresado no es correcto  </h2>
                        </div>
                        <div class='contenedorLogo'>
                        <img src='LOGOS.gif' alt='' width='450px'>
                        </div>
                        </form>
                        </div>";

                
            }

    ?>

    <script type="text/javascript">
        setTimeout("window.location='index.php'",5000);
        </script>
</html>