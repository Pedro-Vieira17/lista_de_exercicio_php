<?php

function converterTemperatura($tempertura_celsius, $temperatura_fahrenheit, $temperatura_kelvin) {

    $temperaturaFahrenheit = ($tempertura_celsius * 9/5) + 32;
    $temperaturaFahrenheit = ($tempertura_Kelvin - 273.15) * 9/5 + 32;
    $temperaturaKelvin = $tempertura_celsius + 273.15;
    $temperaturaCelsius = ($temperatura_fahrenheit -30) /2;

    return array(
        "fahrenheit" => $temperaturaFahrenheit,
        "kelvin" => $temperaturaKelvin
    );
}

$temperaturaCelsius = 0;
$temperatura_fahrenheit = 53;
$temperatura_kelvin = 0;    

$resultado = converterTemperatura($temperaturaCelsius, $temperatura_fahrenheit, $temperatura_kelvin);

echo "Temperatura em Celsius: $temperaturaCelsius °C<br>";
echo "Temperatura em Fahrenheit: " . $resultado["fahrenheit"] . " °F<br>";
echo "Temperatura em Kelvin: " . $resultado["kelvin"] . " K<br>";




?>