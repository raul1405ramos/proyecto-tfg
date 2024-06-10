<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Inversión</title>
</head>
<body>
    <h2>Simulación de Inversión</h2>
    <?php
    // Recibiendo valores ingresados por el usuario
    $investedAmount = $_POST['invested_amount'];
    $returnRate = $_POST['return_rate'] / 100; // Convertir a decimal
    $years = $_POST['years'];

    // Calcular el monto final
    $finalAmount = $investedAmount * pow(1 + $returnRate, $years);
    ?>
    <p>¡Simulación de inversión realizada con éxito!</p>
    <p>Monto invertido: $<?php echo $investedAmount; ?></p>
    <p>Tasa de retorno anual: <?php echo ($_POST['return_rate']) . '%'; ?></p>
    <p>Años de inversión: <?php echo $years; ?></p>
    <p>Monto final después de <?php echo $years; ?> años: $<?php echo number_format($finalAmount, 2); ?></p>
    <a href="miindex.php">Volver</a>
</body>
</html>
