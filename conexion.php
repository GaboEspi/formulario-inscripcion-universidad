<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "universidad";
    $conexion = mysqli_connect($server, $user, $pass, $db) or die("ERROR: conexion fallida a la base de datos -> ".mysqli_error($conexion)."<br>");