<?php

$conexion = new mysqli("localhost", "id17403320_az", "5?(mu^SK#DYKU=0M", "id17403320_practicas");
    if($conexion){
        echo "La gestion fue exitosa !!";
        /*header("Location: ..index.php"); */
    }else{
        echo "Fallo la gestion";
    }
?>