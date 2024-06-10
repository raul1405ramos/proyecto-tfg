<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    try {
        // Configuración de la conexión a la base de datos (reemplaza con tus propios valores)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "noticiasnuevas";
    
    
        // Conexión a la base de datos
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // Crear conexión
        $conn = new mysqli($servername, $username, $password, $database);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
        $pdo->exec('TRUNCATE ticker_sentiment');
    
        // Vaciar ambas tablas
        $pdo->exec('TRUNCATE noticia');
    
    
        echo "Operación completada con éxito.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    echo "ok";
}



    $json = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&tickers=AAPL&apikey=demo');
    if ($json === false) {
        throw new Exception("Error al obtener datos de Alpha Vantage");
    }

    $data = json_decode($json, true);

    foreach ($data['feed'] as $article) {
        if (isset($article['source'], $article['title'], $article['time_published'], $article['ticker_sentiment'])) {
            $source = $conn->real_escape_string($article['source']);
            $titulo = $conn->real_escape_string($article['title']);
            $time_published = $conn->real_escape_string($article['time_published']);

            $sqlInsertTable = "INSERT IGNORE INTO noticia (title, time_published, source) VALUES ('$titulo', '$time_published', '$source')";

            if ($conn->query($sqlInsertTable) === TRUE) {
                // echo "Se ha insertado los datos de la tabla noticia <br>";
                $noticia_id = $conn->insert_id;
            } else {
                // echo "Error al insertar: " . $conn->error . "<br>";
            }

            foreach ($article['ticker_sentiment'] as $article1) {
                if (isset($article1['ticker'], $article1['relevance_score'], $article1['ticker_sentiment_score'], $article1['ticker_sentiment_label'])) {
                    $accion = $conn-> real_escape_string($article1['ticker']);
                    $relevancia_accion = $conn->real_escape_string($article1['relevance_score']);
                    $puntuacion_sentimiento_accion = $conn->real_escape_string($article1['ticker_sentiment_score']);
                    $tipo_sentimiento = $conn->real_escape_string($article1['ticker_sentiment_label']);

                    $sqlInsertTable = "INSERT IGNORE INTO ticker_sentiment(id_noticia, ticker, relevance_score, ticker_sentiment_score, ticker_sentiment_label)
                        VALUES ('$noticia_id', '$accion', '$relevancia_accion', '$puntuacion_sentimiento_accion', '$tipo_sentimiento')";

                    if ($conn->query($sqlInsertTable) === TRUE) {
                        
                    } else {
                        // echo "No se ha insertado";
                    }
                }
            }
        }
        header("Location: conexion.php");
    }






?>