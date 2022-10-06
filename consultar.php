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

                echo "Bienvenido $nombre";

                if($antiguedad < $fechaLimite && $cargo == 1){

                    mysqli_query($mysqli, "INSERT INTO sorteo (ci,nombre) VALUES ('$ci','$nombre')");

                    mysqli_query($mysqli, "DELETE FROM personas WHERE ci=$ci");
                }
              
            }else{


                echo "Esta persona no esta invitada";
            }
         
    
    ?>
