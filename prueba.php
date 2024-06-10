<?php
// Leer el archivo .csv
$csvFile = fopen("promedio.csv", "r");
$csvData = [];

// Leer las líneas del archivo y almacenarlas en un array
if ($csvFile !== false) {
    while (($row = fgetcsv($csvFile)) !== false) {
        $csvData[] = $row;
    }
    fclose($csvFile);
} else {
    echo "No se pudo abrir el archivo.";
}

// Convertir los datos a JSON para usar en JavaScript
$csvDataJson = json_encode($csvData);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica desde CSV</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="400" height="200"></canvas>
    <script>
        // Obtener los datos desde PHP
        const csvData = <?php echo $csvDataJson; ?>;

        // Separar los encabezados y los datos
        const labels = csvData.slice(1).map(row => row[0]);
        const values = csvData.slice(1).map(row => parseFloat(row[1]));

        // Configurar la gráfica con Chart.js
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line', // Puedes cambiar el tipo a 'bar', 'pie', etc.
            data: {
                labels: labels,
                datasets: [{
                    label: '# de Valores',
                    data: values,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
