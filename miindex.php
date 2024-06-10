<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de Inversión</title>
</head>
<body>
    <h1>Bienvenido a la Aplicación de Inversión</h1>
    <form action="simulacion.php" method="post">
        <label for="invested_amount">Monto a invertir:</label>
        <input type="number" id="invested_amount" name="invested_amount" required><br><br>
        
        <label for="return_rate">Tasa de retorno anual (%):</label>
        <input type="number" id="return_rate" name="return_rate" min="0" step="0.01" required><br><br>
        
        <label for="years">Años de inversión:</label>
        <input type="number" id="years" name="years" min="1" required><br><br>
        
        <input type="submit" value="Simular inversión">
    </form>
</body>
</html>
