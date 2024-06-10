<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentimiento noticias</title>
</head>

<style>

        .contenedor {
            text-align: right; /* Alinea los elementos a la derecha */
        }

        .boton1 {
            display: inline-block;
            transform: translateY(35px); /* Ajusta la posición vertical según tus necesidades */
        }

        .boton1 button {
            border-radius: 50%; /* Utiliza 50% para que el botón sea circular */
            color: black;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            outline: none;
        }
    </style>


</head>

<body>


<div class="container">
<div class="contenedor">
        <div class="boton1">
            <form action="reload.php" method="GET">
                <button type="submit">↻</button>
            </form>
        </div>
    </div>
    <label>Acción a buscar: </label>
    </div>
  <form action="conexion.php" method="POST">
        <select name="acciones">
        <option value="GOOG">GOOG</option>
            <option value="AAPL">AAPL</option>
            <option value="SSNLF">SSNLF</option>
            <option value="BRK-A">BRK-A</option>
            <option value="IVZ">IVZ</option>
            <option value="MSFT">MSFT</option>
            <option value="FOREX:USD">FOREX:USD</option>
            <option value="C">C</option>
            <option value="CSCO">CSCO</option>
            <option value="VZ">VZ</option>
            <option value="VRTX">VRTX</option>
            <option value="MDB">MDB</option>
            <option value="DT">DT</option>
            <option value="ITCI">ITCI</option>
            <option value="TSLA">TSLA</option>
            <option value="ADBE">ADBE</option>
            <option value="PLAB">PLAB</option>
            <option value="AMPH">AMPH</option>
            <option value="META">META</option>
            <option value="NVDA">NVDA</option>
            <option value="APG">APG</option>
            <option value="CRYPTO:BTC">CRYPTO:BTC</option>
            <option value="AMD">AMD</option>
            <option value="AMZN">AMZN</option>
            <option value="SNEJF">SNEJF</option>
            <option value="NOK">NOK</option>
            <option value="LITE">LITE</option>
            <option value="BMI">BMI</option>
            <option value="REVG">REVG</option>
            <option value="SNOW">SNOW</option>
            <option value="JPM">JPM</option>
            <option value="V">V</option>
            <option value="LLY">LLY</option>
            <option value="BKNG">BKNG</option>
            <option value="BA">BA</option>
            <option value="ASML">ASML</option>
            <option value="TSM">TSM</option>
            <option value="FOREX:AMD">FOREX:AMD</option>
            <option value="FOREX:KRW">FOREX:KRW</option>
            <option value="AAOI">AAOI</option>
            <option value="VRT">VRT</option>
            <option value="IONQ">IONQ</option>
            <option value="INTC">INTC</option>
            <option value="MORN">MORN</option>
            <option value="NFLX">NFLX</option>
            <option value="CVBF">CVBF</option>
            <option value="TPL">TPL</option>
            <option value="ETN">ETN</option>
            <option value="MS">MS</option>
            <option value="SSTK">SSTK</option>
            <option value="CRYPTO:ETH">CRYPTO:ETH</option>
            <option value="CRYPTO:SHIB">CRYPTO:SHIB</option>
            <option value="CRYPTO:DOGE">CRYPTO:DOGE</option>
            <option value="OXY">OXY</option>
            <option value="BAC">BAC</option>
            <option value="KO">KO</option>
            <option value="RIVN">RIVN</option>
            <option value="GM">GM</option>
            <option value="SPOT">SPOT</option>
            <option value="PCRFF">PCRFF</option>
            <option value="NKE">NKE</option>
            <option value="PMDKF">PMDKF</option>
            <option value="HINOY">HINOY</option>
            <option value="MCO">MCO</option>
            <option value="SGEN">SGEN</option>
            <option value="PFE">PFE</option>
            <option value="NOW">NOW</option>
            <option value="CDNS">CDNS</option>
            <option value="DBX">DBX</option>
            <option value="PYPL">PYPL</option>
            <option value="GS">GS</option>
            <option value="FOREX:GBP">FOREX:GBP</option>
            <option value="WMG">WMG</option>
            <option value="EPR">EPR</option>
            <option value="LVS">LVS</option>
            <option value="AXP">AXP</option>
            <option value="DOCU">DOCU</option>
            <option value="CRYPTO:NANO">CRYPTO:NANO</option>
            <option value="HAS">HAS</option>
            <option value="URI">URI</option>
            <option value="FSCO">FSCO</option>
            <option value="PLD">PLD</option>
            <option value="SPG">SPG</option>
            <option value="TCTZF">TCTZF</option>
            <option value="ASCCF">ASCCF</option>
            <option value="ON">ON</option>
            <option value="NTDOF">NTDOF</option>
            <option value="NTES">NTES</option>
            <option value="WFC">WFC</option>
            <option value="PG">PG</option>
            <option value="WBA">WBA</option>
            <option value="RBLX">RBLX</option>
            <option value="EA">EA</option>
            <option value="TPX">TPX</option>
            <option value="LNVGF">LNVGF</option>
            <option value="TRMNF">TRMNF</option>
            <option value="QCOM">QCOM</option>
            <option value="BBY">BBY</option>
            <option value="HNORY">HNORY</option>
            <option value="DELL">DELL</option>
            <option value="SFTBF">SFTBF</option>
            <option value="ARM">ARM</option>
            <option value="CME">CME</option>
            <option value="JBL">JBL</option>
            <option value="AVGO">AVGO</option>
            <option value="NXPI">NXPI</option>
            <option value="MU">MU</option>
            <option value="TXN">TXN</option>
            <option value="STM">STM</option>
            <option value="CPRT">CPRT</option>
            <option value="SMCI">SMCI</option>
            <option value="TDG">TDG</option>
            <option value="ACLS">ACLS</option>
            <option value="BN">BN</option>
            <option value="DTST">DTST</option>
            <option value="EXTR">EXTR</option>
            <option value="ST">ST</option>
            <option value="GFS">GFS</option>
            <option value="ALGM">ALGM</option>
            <option value="CHWY">CHWY</option>
            <option value="LEN">LEN</option>
            <option value="COST">COST</option>
            <option value="F">F</option>
            <option value="BABA">BABA</option>
            <option value="ABNB">ABNB</option>
        </select>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    </div>
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

        /*--------------TABLA NOTICIA-------------------*/
        $sqlCreateTableNoticia = "CREATE TABLE IF NOT EXISTS noticia (
            id INT auto_increment primary key,
            title VARCHAR(500),
            time_published datetime(6),
            source VARCHAR(20),
            url VARCHAR(255)
        )";
        if ($conn->query($sqlCreateTableNoticia) === TRUE) {
            //echo "Tabla Noticia creada exitosamente" . "<br>";
        } else {
            //echo "Error al crear la tabla: " . $conn->error . "<br>";
        }

        foreach ($data['feed'] as $article) {
            if (isset($article['source'], $article['title'], $article['time_published'], $article['url'])) {
                $url = $conn->real_escape_string($article['url']);
                $source = $conn->real_escape_string($article['source']);
                $titulo = $conn->real_escape_string($article['title']);
                $time_published = $conn->real_escape_string($article['time_published']);

                $sqlInsertTable = "INSERT IGNORE INTO noticia (title, time_published, source, url) VALUES ('$titulo', '$time_published', '$source', '$url')";

                if ($conn->query($sqlInsertTable) === TRUE) {
                    echo "Se ha insertado los datos de la tabla noticia <br>";
                    $noticia_id = $conn->insert_id;
                } else {
                     echo "Error al insertar: " . $conn->error . "<br>";
                }

                /*--------------TABLA TICKER_SENTIMENT-------------------*/
                $sqlCreateTableTickerSentiment = "CREATE TABLE IF NOT EXISTS ticker_sentiment (
                    id_ticker_sentiment INT AUTO_INCREMENT PRIMARY KEY,
                    id_noticia INT,
                    ticker VARCHAR(20),
                    relevance_score DECIMAL(8,6),
                    ticker_sentiment_score DECIMAL (8,6),
                    ticker_sentiment_label VARCHAR(20),
                    FOREIGN KEY (id_noticia) REFERENCES noticia(id)
                )";
                if ($conn->query($sqlCreateTableTickerSentiment) === TRUE) {
                    // echo "Tabla TickerSentiment creada exitosamente" . "<br>";
                } else {
                    // echo "Error al crear la tabla: " . $conn->error . "<br>";
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
                            // echo "Se ha insertado los datos de la tabla ticker_sentiment";
                        } else {
                            // echo "No se ha insertado";
                        }
                    }
                }
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar']) && isset($_POST['acciones'])) {
            $accionSeleccionada = $conn->real_escape_string($_POST['acciones']);                 
            $sqlSelect = "SELECT n.id, n.title, n.time_published, n.source, n.url,
            ts.ticker, ts.relevance_score, ts.ticker_sentiment_score, ts.ticker_sentiment_label
            FROM noticia n
            LEFT JOIN ticker_sentiment ts ON n.id = ts.id_noticia
            WHERE ts.ticker = '$accionSeleccionada'
            LIMIT 289";
        } else {
            $sqlSelect = "SELECT n.id, n.title, n.time_published, n.source, n.url,
                ts.ticker, ts.relevance_score, ts.ticker_sentiment_score, ts.ticker_sentiment_label
            FROM noticia n
            LEFT JOIN ticker_sentiment ts ON n.id = ts.id_noticia
            LIMIT 289";
        }
        
        
        
        $result = $conn->query($sqlSelect);

        if ($result === false) {
            // echo "Error en la consulta SQL: " . $conn->error . "<br>";
        } else {
            if ($result->num_rows > 0) {
                $currentNoticiaId = null;
                while ($row = $result->fetch_assoc()) {
                    // Si cambiamos a una nueva noticia, mostrar información de la noticia
                    if ($currentNoticiaId !== $row["id"]) {
                        if ($currentNoticiaId !== null) {
                         
                        }
                        echo "<hr>";
                        echo "ID Noticia: " . $row["id"] . "<br>";
                        echo "Título: " . $row["title"] . "<br>";
                        echo "Fecha Publicación: " . $row["time_published"] . "<br>";
                        echo "Fuente: " . $row["source"] . "<br>";
                        echo "URL: " . $row["url"] . "<br>";
                        echo "-------------------";
                        echo "<br>";
                        $currentNoticiaId = $row["id"];
                    }

                    // Mostrar información de la acción
                    echo "Acción: " . $row["ticker"] . "<br>";
                    echo "Relevancia Acción: " . $row["relevance_score"] . "<br>";
                    echo "Puntuación Sentimiento Acción: " . $row["ticker_sentiment_score"] . "<br>";
                    echo "Sentimiento Acción: " . $row["ticker_sentiment_label"] . "<br>";
                    echo "----------------------";
                    echo "<br>";
                }
            } else {
                // echo "No hay noticias con acciones asociadas.";
            }
        }
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

    $conn->close();
    ?>
