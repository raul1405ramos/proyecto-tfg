<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto:wght@300&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
          .card:hover {
            background-color: blue !important;
            color: white;
            cursor: pointer;
        }

        .navbar-brand{
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav class="navbar bg-orange" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" onclick="window.location.href='inicio.php';">Inicio</a>
        <a class="navbar-brand" onclick="window.location.href='acciones.php';">Empresas</a>
        <a class="navbar-brand" onclick="window.location.href='contacto.php';">Contacto</a>
    </div>
</nav>

<h2 class="text-center mt-4 text-black"><b>ELIGE UNA COMPAÑÍA</b></h2>
<br>

<div class="container">
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='goog.php';">
                    <b>GOOG</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='aapl.php';">
                    <b>AAPL</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ssnlf.php';">
                    <b>SSNLF</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='brk-a.php';">
                    <b>BRK-A</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ivz.php';">
                    <b>IVZ</b>
                </div>
            </div>
        </div>
        <!-- Añadir más tarjetas según sea necesario -->
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='forex-usd.php';">
                    <b>FOREX:USD</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='baba.php';">
                    <b>BABA</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='csco.php';">
                    <b>CSCO</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='vz.php';">
                    <b>VZ</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ko.php';">
                    <b>KO</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='roku.php';">
                    <b>ROKU</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='spgi.php';">
                    <b>SPGI</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='itci.php';">
                    <b>ITCI</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='qcom.php';">
                    <b>QCOM</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='tsla.php';">
                    <b>TSLA</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='cdns.php';">
                    <b>CDNS</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='crypto-btc.php';">
                    <b>CRYPTO:BTC</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='amd.php';">
                    <b>AMD</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='amzn.php';">
                    <b>AMZN</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='snejf.php';">
                    <b>SNEJF</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ttd.php';">
                    <b>TTD</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='nyt.php';">
                    <b>NYT</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='axp.php';">
                    <b>AXP</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ar.php';">
                    <b>AR</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='meta.php';">
                    <b>META</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='nvda.php';">
                    <b>NVDA</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='v.php';">
                    <b>V</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='lly.php';">
                    <b>LLY</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='hei.php';">
                    <b>HEI</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ba.php';">
                    <b>BA</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='arm.php';">
                    <b>ARM</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='tsm.php';">
                    <b>TSM</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='forex-amd.php';">
                    <b>FOREX:AMD</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='whd.php';">
                    <b>WHD</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='wt.php';">
                    <b>WT</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='vrt.php';">
                    <b>VRT</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='msft.php';">
                    <b>MSFT</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='intc.php';">
                    <b>INTC</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='morn.php';">
                    <b>MORN</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='nflx.php';">
                    <b>NFLX</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='dtst.php';">
                    <b>DTST</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='cop.php';">
                    <b>COP</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='lnvgf.php';">
                    <b>LNVGF</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='ms.php';">
                    <b>MS</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='apg.php';">
                    <b>APG</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='crypto-eth.php';">
                    <b>CRYPTO:ETH</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='smci.php';">
                    <b>SMCI</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='crypto-doge.php';">
                    <b>CRYPTO:DOGE</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='oxy.php';">
                    <b>OXY</b>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center bg-light">
                <div class="card-body" onclick="window.location.href='bac.php';">
                    <b>BAC</b>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Añadir más filas según sea necesario -->
</div>

<footer class="footer mt-5">
    <div class="container row">
        <div class="footer-col col-md-3">
            <h4>company</h4>
            <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">visit website</a></li>
            </ul>
        </div>
        <div class="footer-col col-md-3">
            <h4>get help</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
            </ul>
        </div>
        <div class="footer-col col-md-3">
            <h4>online shop</h4>
            <ul>
                <li><a href="#">download</a></li>
                <li><a href="#">changelog</a></li>
                <li><a href="#">github</a></li>
                <li><a href="#">all version</a></li>
            </ul>
        </div>
        <div class="footer-col col-md-3">
            <h4>follow us</h4>
            <div class="social-links">              
                <a href="#"><i class="bi bi-facebook"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></i></a>
                <a href="#"><i class="bi bi-twitter-x"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="40" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></i></i></a>
                <a href="#"><i class="bi bi-instagram"></i><svg xmlns="http://www.w3.org/2000/svg" width="26" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372.852.038 1.125.048 3.297.048 2.173 0 2.445-.01 3.298-.048.851-.04 1.432-.174 1.941-.372a3.928 3.928 0 0 0 2.34-2.34c.198-.509.333-1.09.372-1.941.037-.853.047-1.125.047-3.297 0-2.174-.01-2.446-.047-3.298-.04-.85-.174-1.431-.372-1.941a3.932 3.932 0 0 0-.923-1.416 3.924 3.924 0 0 0-1.416-.923c-.51-.198-1.09-.333-1.941-.372C10.445.01 10.173 0 8.001 0zm0 1.459c2.123 0 2.375.009 3.217.047.777.035 1.2.166 1.48.276.373.145.64.318.92.598.28.28.453.546.598.92.11.278.241.703.276 1.48.038.842.047 1.094.047 3.217 0 2.122-.009 2.374-.047 3.216-.035.777-.166 1.2-.276 1.481a2.454 2.454 0 0 1-.598.92 2.46 2.46 0 0 1-.92.598c-.278.11-.703.241-1.48.276-.842.038-1.094.047-3.217.047-2.123 0-2.374-.009-3.216-.047-.777-.035-1.201-.166-1.481-.276a2.46 2.46 0 0 1-.92-.598 2.462 2.462 0 0 1-.598-.92c-.11-.278-.241-.704-.276-1.481-.038-.842-.047-1.094-.047-3.216 0-2.124.009-2.375.047-3.217.035-.777.166-1.201.276-1.48.145-.374.318-.64.598-.92.28-.28.546-.453.92-.598.279-.11.704-.241 1.481-.276.842-.038 1.094-.047 3.216-.047zM8 3.889a4.111 4.111 0 1 0 0 8.222 4.111 4.111 0 0 0 0-8.222zm0 1.459a2.652 2.652 0 1 1 0 5.305 2.652 2.652 0 0 1 0-5.305zm5.203-.994a.959.959 0 1 1-1.917 0 .959.959 0 0 1 1.917 0z"/>
                  </svg></a>
                <a href="#"><i class="bi bi-linkedin"></i><svg xmlns="http://www.w3.org/2000/svg" width="26" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
<               </svg></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-zCtR02LQGAP+IGd8/M3ocMIzOFVRSy7KNMO9vDaI2GFn48ueEq6sq0jv+UE6s3Pb" crossorigin="anonymous"></script>
</body>
</html>
