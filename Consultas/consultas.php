<?php
    include_once 'conexion.php';
    $numVuelo = 1;
    $conexion = Conexion::obtenerConexion();

    $sql = "Select * from pasajeros";
    $sentencia = $conexion->prepare($sql);

    $salida = $sentencia->execute($sql);

    echo "Tenemos : ".$salida ->rowCount();

?>