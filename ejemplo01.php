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
<form class="text-center">
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$totalvendido = $_POST["totalvendido"];
			$hijos = $_POST["hijos"];

			$sueldo_basico = 600;
			$bonificacion_por_hijo = 50;
			$porcentaje_comision = 7.5;
			$porcentaje_descuento = 11;

			$bonificacion = $hijos * $bonificacion_por_hijo;

			$comision = ($totalvendido * $porcentaje_comision) / 100;

			$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;

			$descuento = ($sueldo_bruto * $porcentaje_descuento) / 100;

			$sueldo_neto = $sueldo_bruto - $descuento;

			echo "<h2>Resultados:</h2>"; 
			echo "Importe Total: S/. ". $totalvendido . "<br>";
			echo  "Cantidad de hijos: S/. " . $hijos ."<br>"; 
			echo "Bonificación: S/. " . $bonificacion . "<br>";
			echo "Comisión: S/. " . $comision . "<br>";
			echo "Sueldo bruto: S/. " . $sueldo_bruto . "<br>";
			echo "Descuento: S/. " . $descuento . "<br>";
			echo "Sueldo neto: S/. " . $sueldo_neto . "<br>";
		}
	?>
	</form>
</div>
</div>
</body>
</html>

