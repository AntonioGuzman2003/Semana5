<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/css/styles.css">
</head>
<body>
<div class="card">
<div class="card-body">
<form method="POST" class="text-center">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$precioActual = $_POST["precioActual"];
	$cantidad = $_POST["cantidad"];

$rebaja = $precioActual * 0.05; 
$nuevoPrecio = $precioActual - $rebaja; 

$importe = $nuevoPrecio * $cantidad;

$descuento = $importe * 0.07;

$importeAPagar = $importe - $descuento;

$Incentivo = $cantidad * 2;

echo "<h2>Resultados:</h2>";
echo "Nuevo precio de la gaseosa: S/" . number_format($nuevoPrecio, 2) . "<br>";
echo "Importe de la compra: S/" . number_format($importe, 2) . "<br>";
echo "Importe del descuento: S/" . number_format($descuento, 2) . "<br>";
echo "Importe a pagar: S/" . number_format($importeAPagar, 2) . "<br>";
echo "Incentivo: " . $Incentivo  ;
}
?>
</form>
</div>
</div>
</body>
</html>