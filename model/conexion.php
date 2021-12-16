<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PRODUCCION */
    //$conexion = mysqli_connect("localhost","root","","emisora");
    /* CONEXION CON EL SERVIDOR PRODUCCION */
    $conexion = mysqli_connect("localhost","genioweb1_admin","GJp.BLO{qcgm","genioweb1_emisora");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}