<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            background-image: url('./imagenesdeinversionesiniciales.jpg');
            background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
            background-position: center; /* Centra la imagen en el fondo */
            background-attachment: fixed; /* Fija la imagen de fondo para que no se mueva con el desplazamiento */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin-bottom: 20px;
            color: #333;
            transition: color 0.3s ease;
        }

        .card:hover h2 {
            color: #007bff;
        }

        .card input[type="text"],
        .card input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .card input[type="text"]:focus,
        .card input[type="password"]:focus {
            border-color: #007bff;
        }

        .card button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        .social-buttons {
            margin-top: 20px;
        }

        .social-buttons button {
            border: none;
            margin: 0 10px;
            cursor: pointer;
        }

        .social-buttons button:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="card">
            <h2>Crear Cuenta</h2>
            <form method="post" action="">
                <input type="text" placeholder="Nombre" name="nombre" required>
                <input type="text" placeholder="Apellidos" name="apellidos" required>
                <input type="password" placeholder="Contraseña" name="pass" required>
                <input type="text" placeholder="Correo Electrónico" name="correo_electronico" required>
                <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
                <input type="text" placeholder="DNI" name="DNI" required>
                <input type="text" placeholder="Teléfono" name="telefono" required>
                <button type="submit">Confirmar</button>
                <br><br>
                
            </form>
            <div class="social-buttons">
                <button><i class="fab fa-facebook-f"></i></button>
                <button><i class="fab fa-google"></i></button>
                <button><i class="fab fa-twitter"></i></button>
                <button><i class="fab fa-linkedin-in"></i></button>
                
            </div>
        </div>
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "noticiasnuevas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Insertar en la tabla nueva_persona

if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['pass']) && isset($_POST['correo_electronico']) && isset($_POST['nombre_usuario']) && isset($_POST['DNI']) && isset($_POST['telefono'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $pass = $_POST['pass'];
    $correo = $_POST['correo_electronico'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $DNI = $_POST['DNI'];
    $telefono = $_POST['telefono'];

    $insertarDatos = "INSERT INTO nueva_persona (nombre, apellidos, pass, correo_electronico, nombre_usuario, DNI, telefono) VALUES ('$nombre', '$apellidos', '$pass', '$correo', '$nombre_usuario', '$DNI', '$telefono')";

    if ($conn->query($insertarDatos) === TRUE) {
        echo "Se ha insertado correctamente";
        header("Location: inicio.php");
    } else {
        echo "Hay un error en la inserción: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
