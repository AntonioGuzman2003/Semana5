<!DOCTYPE html>
<html>
<head>
	<title>Venta de cono de CD</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/css/styles.css">
</head>
<body>
<div class="card">
<div class="card-body">
	<form method="POST" class="text-center">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$preciocono = $_POST["cono"];

$cantidadconos = 100; 
$descuento = 0.05;

$importe = $preciocono * $cantidadconos;

$importedescuento1 = $importe * $descuento;

$importedescuento2 = $importedescuento1 * $descuento;

$importedescuentototal = $importedescuento1 + $importedescuento2;

$importe_a_pagar = $importe - $importedescuentototal;

echo "<h2>Resultados:</h2>";
echo "Precio del cono: S/" .$preciocono ."<br>";
echo "Importe de la compra: S/" . $importe . "<br>";
echo "Importe del descuento total: S/" . $importedescuentototal . "<br>";
echo "Importe a pagar: S/" . $importe_a_pagar;
}
?>
</form>
	
</div>
</div>
</body>
</html>