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

$sql = "SELECT id_persona, nombre, apellidos, pass, correo_electronico, nombre_usuario, DNI, telefono FROM nueva_persona";
$resultado = $conn->query($sql);

//Eliminar usuarios
if(isset($_GET["delete_id"])){
$delete = $_GET["delete_id"];
$delete_sql = "DELETE FROM nueva_persona WHERE id_persona = ?";
$stmt = $conn->prepare($delete_sql);
$stmt->bind_param("i", $delete);

if($stmt->execute()){
echo "<script>alert('Usuario eliminado correctamente;')</script>";

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Personas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        /* Establece el fondo negro para todo el documento */
        body {
            background-color: rgb(255, 165, 0);
            color: black; /* Establece el color del texto en blanco */
        }

        /* Estilo para botones */
        button.btn {
            color: white; /* Cambia el color del texto a blanco */
        }

        h1{
            text-align: center;
        }
 
        th{
            block-size: auto;
            color: white;
            font-weight: bold;
            font-size: 19px;
        }

        td{  
            color: #000; /* Negro intenso */
            font-weight: bold; /* Añade negrita */   
            font-size: 15px;    
        }

        table{
            width: 100%;
            height: auto;
        }
        

        
    </style>
</head>
<body>
    <div class="container">
        <br>
        <h1>Usuarios Registrados</h1>
        <table class="table table-striped mt-5 text-center ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>nombre_usuario</th>
                    <th>contraseña</th>
                    <th>DNI</th>
                    <th>telefono</th>
                    <th>correo_electronico</th>
                    <th>acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre los resultados de la consulta y generar filas de tabla HTML
                // Listado de usuarios
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_persona"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["apellidos"] . "</td>";
                        echo "<td>" . $row["nombre_usuario"] . "</td>";
                        echo "<td>" . $row["pass"] . "</td>";
                        echo "<td>" . $row["DNI"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["correo_electronico"] . "</td>";
                        echo "<td>" . "<a href='?delete_id=" . $row["id_persona"] . "'><button type='button' class='btn btn-danger'>Eliminar</button>" . "</td>";
                        echo "<td>" . "<a href='edit.php?id=" . $row["id_persona"] . "'><button type='button' class='btn btn-primary'>Modificar</button>" . "</td>";
                        echo "</tr>";
                       
                    }
                } else {
                    echo "<tr><td colspan='3'>No hay usuarios registrados</td></tr>";
                }

                
                ?>
            

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

