<?php
    require_once("conexion.php");
    $sql = "INSERT INTO inscritos (nombres, apellidos, tipo_documento, documento, correo, fecha_nacimiento, pais, residencia, estudios, carrera) VALUES (
    '".$_POST['nombres']."'
    , '".$_POST['apellidos']."'
    , '".$_POST['tipo_documento']."'
    , ".$_POST['documento']."
    , '".$_POST['correo']."'
    , '".$_POST['fecha']."'
    , '".$_POST['pais']."'
    , '".$_POST['residencia']."'
    , '".$_POST['estudios']."'
    , '".$_POST['carrera']."')";
    $conexion->query($sql);
    header("location:finproceso.php");