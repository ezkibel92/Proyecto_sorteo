<?php

    class Cconexion{

       static function ConexionBD(){

            $host='localhost';
            $dbname='invitados';
            $username='root';
            $pasword ='';

            try {
                $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$pasword);

                echo "se conecto correctamente a la base de datos";

            } catch (PDOException $exp) {

                echo ("No se logró conectar correctamente con la base de datos:$dbname, error: $exp");
                
            }
            return $conn;

        }

    }


?>