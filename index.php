<?php
// Insertar en la tabla nueva_persona
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "noticiasnuevas";

$error = false;

$usuario_admin = "raul1405";
$pass_admin = "hoyo1405";

  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $database);

if (isset($_POST['nombre_usuario']) && isset($_POST['pass'])) {
    $nombre = $_POST['nombre_usuario'];
    $pass = $_POST['pass'];

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } else {
        $nombre_espacado = $conn->real_escape_string($nombre);
        $pass_escapado = $conn->real_escape_string($pass);
            if($nombre_espacado === $usuario_admin && $pass_escapado === $pass_admin){
                $_SESSION['nombre_usuario'] = $nombre;
                $_SESSION['logged_in'] = true;
                echo "<script>window.location.href='admin.php'</script>";
                exit;
                
            } else {
                $sql = "SELECT * FROM nueva_persona WHERE nombre_usuario= '$nombre_espacado' AND pass='$pass_escapado'";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {              
                    // Si las credenciales son correctas, establece la variable de sesión y redirige
                    $_SESSION['nombre_usuario'] = $nombre;
                    $_SESSION['logged_in'] = true;
                    // Redirige utilizando JavaScript
                    echo "<script>window.location.href='inicio.php';</script>";
                    exit; // Asegúrate de salir del script después de redirigir
                } else {
                    // Si las credenciales son incorrectas, muestra un mensaje de error
                    $error = true;
                }
            
        }
        }
        $conn->close();
            }
           
?>

<!-- Mostrar el botón de error solo si $error es true -->
<?php if (isset($error) && $error === true): ?>
<script>

document.querySelector('.boton-error').style.display = 'block';

</script>

<?php endif; ?>


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
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
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

        /* Estilos para el botón de error */
        .boton-error {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
            display: none;
        }


        </style>
    </head>
    <body>
        <div class="container">
                <div class="card">
                <h2>Inicio de Sesión</h2>
                <form method="POST">
                    <input type="text" placeholder="Nombre de usuario" name="nombre_usuario" required>
                    <input type="password" placeholder="Contraseña" name="pass" required>
                    <button type="submit" style="background-color: #007bff">Confirmar</button>
                    <br><br>
                    <div class="register-link">
                    ¿No tienes una cuenta todavía? <a href="registro.php">Registrar Aquí</a>
                </div>
                </form>
                <div class="social-buttons">
                    <button style="background-color: #007bff"><i class="fab fa-facebook-f" ></i></button>
                    <button style="background-color: #007bff"><i class="fab fa-google"></i></button>
                    <button style="background-color: #007bff"><i class="fab fa-twitter"></i></button>
                    <button style="background-color: #007bff"><i class="fab fa-linkedin-in"></i></button>
                </div> 
                <button class="boton-error" style="margin: 20px auto 0;">¡Hay un error en las credenciales, inténtelo de nuevo!</button>

        </div>


    </body>
    </html>

  
