<?php

    include ("abre.php");

    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $Fecha      = $_POST['Fecha'];
    $Pelicula   = $_POST['Pelicula'];
    $especialtv = $_POST['especialtv'];
    $Pais       = $_POST['Pais'];
    $Correo     = $_POST['Correo'];
    $Cel        = $_POST['Cel'];
    $Mercancia  = $_POST['Mercancia'];

    $consulta = "INSERT INTO fans(Nombre, Apellidos, Fecha, Pelicula, especialtv, Pais, Correo, Cel, Mercancia) VALUES
    ('$Nombre','$Apellidos','$Fecha','$Pelicula','$especialtv','$Pais','$Correo','$Cel','$Mercancia')";

    if ($conexion->query($consulta) === TRUE){
    /*header ("Location: index.php");*/
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();
?>