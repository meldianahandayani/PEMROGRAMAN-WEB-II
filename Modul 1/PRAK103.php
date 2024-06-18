<?php
echo "Masukkan nilai Celcius: ";
$celcius = (float) fgets(STDIN);
$fahrenheit = round(($celcius * 9/5) + 32, 4);
$reamur = round($celcius * 4/5, 4);
$kelvin = round($celcius + 273.15, 4);

echo "Celcius = $celcius\n";
echo "Fahrenheit (F) = $fahrenheit\n";
echo "Reamur (R) = $reamur\n";
echo "Kelvin (K) = $kelvin\n";
?>
