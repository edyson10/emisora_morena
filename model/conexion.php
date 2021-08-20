<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PRODUCCION */
    //$conexion = mysqli_connect("localhost","root","","emisora");
    /* CONEXION CON EL SERVIDOR AWS DESARROLLO */
    $conexion = mysqli_connect("52.90.238.70","admin","edyson10","emisora");
    /* CONEXION CON EL SERVIDOR PRODUCCION */
    //$conexion = mysqli_connect("173.201.178.160","turcolombia","turcolombia2021","turcolombia");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}