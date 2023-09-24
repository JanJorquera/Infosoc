<?php
require_once 'conexiones.php';

//Contiene empresas.
$query="CREATE TABLE IF NOT EXISTS empresas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    codempresa INT NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    replegal VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Contiene registros de trabajadores.
$query="CREATE TABLE IF NOT EXISTS regtrabajadores (
    id INT PRIMARY KEY,
    saludo VARCHAR(100) NOT NULL,
    runtrabajador VARCHAR(100) NOT NULL,
    nombre1 VARCHAR(100) NOT NULL,
    nombre2 VARCHAR(100) NOT NULL,
    apellido1 VARCHAR(100) NOT NULL,
    apellido2 VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    direccion VARCHAR(100) NOT NULL,
    sector VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    telefono INT NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    sistprevision VARCHAR(100) NOT NULL,
    sistsalud VARCHAR(100) NOT NULL,
    jubilado BIT NOT NULL,
    detalle VARCHAR(100) NOT NULL,
    anos INT NOT NULL,
    detallexp VARCHAR(100) NOT NULL,
    foto1 BLOB,
    foto2 BLOB,
    califtrabajo INT,
    runcontratista VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Contiene registros de usuarios (para el login de contratistas).
$query = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nrousuario INT,
    runusuario VARCHAR(100) NOT NULL,
    nombre1 VARCHAR(100) NOT NULL,
    nombre2 VARCHAR(100) NOT NULL,
    apellido1 VARCHAR(100) NOT NULL,
    apellido2 VARCHAR(100) NOT NULL,
    alias VARCHAR(100) NOT NULL,
    funcion VARCHAR(100) NOT NULL,
    telefono VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    contrasena VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    idempresa INT,
    activo BIT,
    correo VARCHAR(100) NOT NULL,
    FOREIGN KEY (idempresa) REFERENCES empresas(id)
    );";

$conn->exec($query);

//Contiene registros de transportistas.
$query="CREATE TABLE IF NOT EXISTS regtransportista (
    runtransportista INT PRIMARY KEY,
    descontratista VARCHAR(100) NOT NULL,
    contacto VARCHAR(100) NOT NULL,
    telcontacto VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    FOREIGN KEY (idempresa) REFERENCES empresas(id)
    );";

$conn->exec($query);

//Saludos predefinidos.
$query="CREATE TABLE IF NOT EXISTS saludos (
    id INT PRIMARY KEY,
    descsaludos VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Contiene registros de contratistas.
$query="CREATE TABLE IF NOT EXISTS regcontratista (
    runcontratista INT PRIMARY KEY,
    descontratista VARCHAR(100) NOT NULL,
    contacto VARCHAR(100) NOT NULL,
    telcontacto VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Contiene info de los huertos.
$query="CREATE TABLE IF NOT EXISTS emphuertos (
    runhuerto INT PRIMARY KEY,
    deschuerto VARCHAR(100) NOT NULL,
    propietario VARCHAR(100) NOT NULL,
    rubro VARCHAR(100) NOT NULL,
    contacto VARCHAR(100) NOT NULL,
    telcontacto VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla de calificaciones (para que los contratistas califiquen temporeros)
$query="CREATE TABLE IF NOT EXISTS califtrabajo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    notacalificacion VARCHAR(100) NOT NULL,
    detcalificacion VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla de recursos (contiene todos los tipos de recursos que puedan intervenir, contratistas, temporeros, transportistas, tractoristas, etc)(solo almacena nombres del recurso)
$query="CREATE TABLE IF NOT EXISTS tiporecurso (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idrecurso INT,
    descrecurso VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla que almacena detalle de ofertas del contratista.
$query="CREATE TABLE IF NOT EXISTS antecofertas (
    ofnumero INT PRIMARY KEY AUTO_INCREMENT,
    saludo VARCHAR(100) NOT NULL,
    deschuerto VARCHAR(100) NOT NULL,
    sector VARCHAR(100) NOT NULL,
    desctrabajo VARCHAR(100) NOT NULL,
    detrabajo VARCHAR(100) NOT NULL,
    lugartrabajo VARCHAR(100) NOT NULL,
    tipotrabajador VARCHAR(100) NOT NULL,
    descporpago VARCHAR(100) NOT NULL,
    fechainicio DATE,
    duracion INT NOT NULL,
    jortrabajode VARCHAR(100) NOT NULL,
    jortrabajoa VARCHAR(100) NOT NULL,
    horainicio TIME NOT NULL,
    horatermino TIME NOT NULL,
    colacinicio TIME NOT NULL,
    colatermino TIME NOT NULL,
    valorpagar INT NOT NULL,
    desctipotrabajo VARCHAR(100) NOT NULL,
    formapago VARCHAR(100) NOT NULL,
    descmedpago VARCHAR(100) NOT NULL,
    considpago1 VARCHAR(100) NOT NULL,
    considpago2 VARCHAR(100) NOT NULL,
    considpago3 VARCHAR(100) NOT NULL,
    herramientas VARCHAR(100) NOT NULL,
    observaciones VARCHAR(100) NOT NULL,
    nropersonas INT NOT NULL, 
    experiencia VARCHAR(100) NOT NULL,
    runcontratista VARCHAR(100) NOT NULL,
    nombrecontacto VARCHAR(100) NOT NULL,
    telcontacto VARCHAR(100) NOT NULL,
    fechaingreso DATE,
    enlacecontacto VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla para almacenar las inscripciones de las personas (en su mayoría temporeros) a los trabajos.
$query="CREATE TABLE IF NOT EXISTS instrabajo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    FOREIGN KEY (ofnumero) REFERENCES antecofertas(ofnumero),
    runtrabajador VARCHAR(100) NOT NULL,
    runinscribe VARCHAR(100) NOT NULL,
    fechainsc DATE,
    horainsc TIME,
    nroinsc INT
    );";

$conn->exec($query);

//Tabla que almacena solo los tipos de trabajo especificos que se requieren o manejan (cosecha, poda, desmalezar, raleo, etc).
$query="CREATE TABLE IF NOT EXISTS tipotrabajo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idtiptrabajo INT NOT NULL,
    desctrabajo VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla que almacena en función de que se realiza el pago (si es por kilo, balde, hectarea, etc).
$query="CREATE TABLE IF NOT EXISTS tipopago (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idtipopago INT NOT NULL,
    desctipopago VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla que almacena periodo de pago (si es quincenal, semanal, diario, mensual).
$query="CREATE TABLE IF NOT EXISTS periodopago (
    id INT PRIMARY KEY AUTO_INCREMENT,
    descperpago VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla que almacena consideraciones varias para el pago (pago minimo si no se llega a la meta diaria, se paga semana corrida, etc).
$query="CREATE TABLE IF NOT EXISTS considpago (
    id INT PRIMARY KEY AUTO_INCREMENT,
    desconsidpago VARCHAR(100) NOT NULL
    );";

$conn->exec($query);

//Tabla que almacena info para la confirmacion para el trabajo.
$query="CREATE TABLE IF NOT EXISTS confirmtrabajo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    FOREIGN KEY (ofnumero) REFERENCES antecofertas(ofnumero),
    fechaconfirmacion DATE NOT NULL,
    horaconfirmacion DATE NOT NULL,
    numeroconfirmacion INT NOT NULL,
    runtrabajador VARCHAR(100) NOT NULL,
    confasistencia BIT
    );";

$conn->exec($query);
?>