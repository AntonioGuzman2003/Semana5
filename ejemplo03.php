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
	$tarifa = $_POST["tarifa"];
	$dias = $_POST["dias"];

	
	$importebruto = $tarifa * $dias;
	
	$descuento = $importebruto * 0.15;
	
	$importeneto = $importebruto - $descuento;
	
	$lapiceros = $dias * 3;
	
	echo "<h2>Resultados:</h2>"; 
	echo "Importe bruto: S/" . $importebruto . "<br>";
	echo "Descuento: S/" . $descuento . "<br>";
	echo "Importe neto: S/" . $importeneto . "<br>";
	echo "Lapiceros obsequiados: " . $lapiceros;
}
?>
	
</div>
</div>
</body>
</html>