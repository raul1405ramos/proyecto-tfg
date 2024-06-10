<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "noticiasnuevas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

//Comprobar conexión
if($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}
// Recoger el id de la persona
if(isset($_GET["id"])){
$id_persona = $_GET["id"]; 
$sql = "SELECT * FROM nueva_persona WHERE id_persona = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_persona);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

} elseif (isset($_POST["update"])){
// Procesar el formulario de actualización
$id_persona = $_POST["id_persona"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$nombre_usuario = $_POST["nombre_usuario"];
$pass = $_POST["pass"];
$DNI = $_POST["DNI"];
$telefono = $_POST["telefono"];
$correo_electronico = $_POST["correo_electronico"];

$sql_update = "UPDATE nueva_persona SET nombre = ?, apellidos = ?, nombre_usuario = ?, pass = ?, DNI = ?, telefono = ?, correo_electronico = ? 
WHERE id_persona = ?";

$stmt = $conn->prepare($sql_update);
$stmt->bind_param("sssssssi", $nombre, $apellidos, $nombre_usuario, $pass, $DNI, $telefono, $correo_electronico, $id_persona);

if($stmt->execute()){
echo "<script>Usuario actualizado correctamente!!</script>";
echo "<script>window.location.href = 'admin.php';</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto:wght@300&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Editar Usuario</title>
    <style>

        .container{
transform: translateY(70px);


        }
        

    </style>
</head>
<body>
    
    <div class="container mt-5">
<?php if (isset($usuario)): ?>
    <form action="edit.php" method="post">
    <h1 style="text-align: center;">Modificación de Usuario</h1>
        <input type="hidden" name="id_persona" value="<?php echo $usuario['id_persona']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?> ">
        </div> 
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $usuario['apellidos']; ?> ">
        </div>
        <div class="mb-3">
            <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" value="<?php echo $usuario['nombre_usuario']; ?> ">
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $usuario['pass']; ?> ">
        </div>
        <div class="mb-3">
            <label for="DNI" class="form-label">DNI</label>
            <input type="text" class="form-control" name="DNI" id="DNI" value="<?php echo $usuario['DNI']; ?> ">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario['telefono']; ?> ">
        </div>
        <div class="mb-3">
            <label for="correo_electronico" class="form-label">Correo electrónico</label>
            <input type="text" class="form-control" name="correo_electronico" id="correo_electronico" value="<?php echo $usuario['correo_electronico']; ?> ">
        </div>
    <button type="submit" name="update" class="btn btn-primary mx-auto d-block">Actualizar</button>
    </form>

    <?php else :?>
        <p>Usuario no encontrado</p>
    <?php endif; ?>    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>