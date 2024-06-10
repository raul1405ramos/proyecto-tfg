<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "noticiasnuevas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$comentario = $_POST["comentario"];

// Preparar la declaración SQL con marcadores de posición
$sqlInsertData = $conn->prepare("INSERT INTO mensaje (comentario) VALUES (?)");

// Verificar si la preparación fue exitosa
if (!$sqlInsertData) {
    die("Error al preparar la consulta: " . $conn->error);
}

// Vincular los parámetros
$sqlInsertData->bind_param("s", $comentario);

// Ejecutar la consulta
if ($sqlInsertData->execute()) {
    echo $comentario;
} else {
    echo "Error en la inserción: " . $conn->error;
}

// Cerrar la conexión
$conn->close();



?>