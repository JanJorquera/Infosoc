<?php
require_once 'conexiones.php';

$query="CREATE TABLE IF NOT EXISTS regtrabajadores (
    run INT PRIMARY KEY,
    nombre1 VARCHAR(100) NOT NULL,
    nombre2 VARCHAR(100) NOT NULL,
    apellido1 VARCHAR(100) NOT NULL,
    apellido2 VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    direccion VARCHAR(100) NOT NULL,
    sector VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    telefono INT NOT NULL,
    prevision VARCHAR(100) NOT NULL,
    salud VARCHAR(100) NOT NULL,
    jubilado BIT NOT NULL,
    detalle VARCHAR(100) NOT NULL,
    años INT NOT NULL,
    detallexp VARCHAR(100) NOT NULL,
    foto1 BLOB,
    foto2 BLOB
    );";

$conn->exec($query);
?>