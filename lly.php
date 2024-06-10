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

try {
    $json = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&tickers=AAPL&apikey=demo');
    if ($json === false) {
        throw new Exception("Error al obtener datos de Alpha Vantage");
    }

    $data = json_decode($json, true);

//TABLA NOTICIA
//INSERTAR NOTICIA
foreach ($data['feed'] as $article) {
    if (isset($article['source'], $article['title'], $article['time_published'], $article['url'], $article['summary'], $article['banner_image'])) {
        $url = $conn->real_escape_string($article['url']);
        $source = $conn->real_escape_string($article['source']);
        $titulo = $conn->real_escape_string($article['title']);
        $time_published = $conn->real_escape_string($article['time_published']);
        $resumen = $conn-> real_escape_string($article['summary']);
        $imagen = $conn-> real_escape_string($article['banner_image']);
 
        // Verificar si existen autores para este artículo
        if (isset($article['authors']) && is_array($article['authors'])) {
            // Convertir el array de autores en una cadena de texto separada por comas
            $autores = implode(", ", $article['authors']);
            $autores = $conn->real_escape_string($autores);
        } 

        $sqlInsertTable = "INSERT IGNORE INTO noticia (title, time_published, source, urlnew, authors, summary, banner_image) 
                           VALUES ('$titulo', '$time_published', '$source', '$url', '$autores', '$resumen', '$imagen')";

        if ($conn->query($sqlInsertTable) === TRUE) {
            //  echo "Se ha insertado los datos de la tabla noticia <br>";
            $noticia_id = $conn->insert_id;
        } else {
            // echo "Error al insertar: " . $conn->error . "<br>";
        }
    }
}


    //TABLA ACCIONES
    //INSERTAR ACCIONES
    foreach ($article['ticker_sentiment'] as $article1) {
        if (isset($article1['ticker'], $article1['relevance_score'], $article1['ticker_sentiment_score'], $article1['ticker_sentiment_label'])) {
            $accion = $conn-> real_escape_string($article1['ticker']);
            $relevancia_accion = $conn->real_escape_string($article1['relevance_score']);
            $puntuacion_sentimiento_accion = $conn->real_escape_string($article1['ticker_sentiment_score']);
            $tipo_sentimiento = $conn->real_escape_string($article1['ticker_sentiment_label']);

            $sqlInsertTable = "INSERT IGNORE INTO ticker_sentiment(id_noticia, ticker, relevance_score, ticker_sentiment_score, ticker_sentiment_label)
                VALUES ('$noticia_id', '$accion', '$relevancia_accion', '$puntuacion_sentimiento_accion', '$tipo_sentimiento')";

            if ($conn->query($sqlInsertTable) === TRUE) {
                // echo "Se ha insertado los datos de la tabla ticker_sentiment";
            } else {
                // echo "No se ha insertado";
            }
        }
    }

} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto:wght@300&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <nav class="navbar bg-orange" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Inicio</a>
        <a class="navbar-brand" href="#">Acciones</a>
        <a class="navbar-brand" href="#">Contacto</a>
    </div>
</nav>
    <div id="google_translate_element"></div>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            
</head>
<body style="background-color:#FFD700;">

<div class="container mt-5">
    <h1 class="text-center mb-5">¡Noticias registradas con Eli Lilly and Company!</h1>

    <div class="row">
        <?php
        $sqlSelect = "SELECT n.id, n.title, n.time_published, n.source, n.urlnew, n.authors, n.summary, n.banner_image
        FROM noticia n
        LEFT JOIN ticker_sentiment ts ON n.id = ts.id_noticia
        WHERE ts.ticker = 'LLY'
        LIMIT 30";
        // Ejecutar la consulta SQL y obtener los resultados
        $result = $conn->query($sqlSelect);

        // Verificar si hay resultados
        if ($result && $result->num_rows > 0) {
            // Iterar sobre los resultados
            while ($item = $result->fetch_assoc()) {
                ?>   
           <div class="col-lg-4 col-md-6 col-sm-12 mb-4">            
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title"><?php echo $item['title']; ?></h5>
                            <p class="card-text">Fecha de publicación: <?php echo $item['time_published']; ?></p>
                            <a href="<?php echo $item['urlnew']; ?>" class="btn btn-link">Enlace</a>
                            <a href="#" class="btn btn-primary read-more-btn"
                                data-id="<?php echo $item['id']; ?>"
                                data-title="<?php echo $item['title']; ?>"
                                data-source="<?php echo $item['source']; ?>"
                                data-autores="<?php echo $item['authors']?>"
                                data-resumen="<?php echo $item['summary']?>"
                                data-imagen="<?php echo $item['banner_image']?>"
                            >Leer más</a>
                        </div>
                    </div>
                </div>

<?php
            }
        } else {
            // No se encontraron resultados
            echo '<div class="col-12">No hay noticias disponibles.</div>';
        }
        ?>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var btnsReadMore = document.querySelectorAll(".read-more-btn");

    btnsReadMore.forEach(function(btn) {
        btn.addEventListener("click", function() {
            var newsId = this.getAttribute("data-id");
            var newsTitle = this.getAttribute("data-title");
            var newsSource = this.getAttribute("data-source");
            var newsAutores = this.getAttribute("data-autores");
            var newsResumen = this.getAttribute("data-resumen");
            var newsImage = this.getAttribute("data-imagen");

            // Crear una nueva ventana emergente con Bootstrap
            var popup = window.open("", "_blank", "width=600,height=400,scrollbars=yes");

            // Iniciar la escritura del contenido HTML en la ventana emergente
            popup.document.write("<html><head>");
            popup.document.write("<title>" + newsTitle + "</title>");
            popup.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">');
            popup.document.write("</head><body class='bg-light'>");

            // Contenedor principal
            popup.document.write("<div class='container mt-5'>");

            // Título de la noticia
            popup.document.write("<h2 class='text-center mb-4'>" + newsTitle + "</h2>");

            // Fuente
            popup.document.write("<p class='mb-2'><strong>Fuente:</strong> " + newsSource + "</p>");

            // Autores
            popup.document.write("<p class='mb-2'><strong>Autores:</strong> " + newsAutores + "</p>");

            // Resumen
            popup.document.write("<p class='mb-4'><strong>Resumen:</strong> " + newsResumen + "</p>");

            // Imagen de la noticia con tamaño fijo y centrada
            popup.document.write("<div class='text-center'><img src='" + newsImage + "' alt='Banner de la noticia' class='img-fluid'></div>");

            // Separador
            popup.document.write("<hr>");
            popup.document.write("<h2 style='text-align:center;'>Gráfica de Eli Lilly and Company</h2>");
            popup.document.write("<br>");
            // Segunda imagen con tamaño fijo y centrada
            var secondImageElement = "./GRAFICASTFG/GRAFICA AAPL1.jpg";
            popup.document.write("<div class='text-center'><img src='" + secondImageElement + "' alt='Imagen' class='img-fluid'></div>");

            // Cerrar contenedor principal
            popup.document.write("</div>");

            // Cerrar el cuerpo y el HTML de la ventana emergente
            popup.document.write("</body></html>");

            // Cerrar la escritura del contenido
            popup.document.close();
        });
    });
});
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

