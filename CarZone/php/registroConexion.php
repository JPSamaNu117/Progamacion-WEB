<?php

    $usuario = "root";
    $password ="";
    $servidor = "local host";
    $basededatos ="_CarZoneBD_";

    $conexion = mysqli_connect( $servidor,$usuario,"" ) or die ("ERROR CONXION");

    $bd = mysqli_select_db($conexion,$basededatos) or die ("Error base de datos");
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $contra=$_POST['contra'];

    $sql="INSERT INTO datos VALUES ('$nombre','$apellido','$telefono','$correo','$contra')"; 
    
    $ejecutar=mysqli_query($conexion, $sql);

    if(!$ejecutar){
        echo"huvo algun error"; 
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
    }


?>