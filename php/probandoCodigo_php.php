<?php
$nombre = 'Jorge Eliecer';
$apellido = 'ULLOA';
$edad = 55;
$desarrollador = false;
$compara = $edad >= 18;
$efectivo = 2100;
$nota = 85;

$salida = "El Valor de la Variable \$nombre  es: \"$nombre\" 🧐";
//If Ternario
$salidaternaria = $edad >= 18 ? 'Eres Viejo Ya' : 'Menoooor.';
//if ternario anidado
$salidaNotas = ($nota >= 90) ? 'Excelente' : (($nota >= 80) ? 'Bueno' : (($nota >= 70) ? 'Medio' : (($nota >= 50) ? 'Paso' : 'Reprobado')));
//Match
$salidaMatch = match (true) {
    $edad < 3 => "Eres bebe, $nombre",
    $edad < 10 => "Eres Niño , $nombre",
    $edad < 18 => "Eres Adelescente , $nombre",
    $edad === 18 => "Eres Mayor de Esad , $nombre",
    $edad < 40 => "Eres Adulto Joven , $nombre",
    default => "Muy Mayor anciano",
};
//Arrays Crear y mostrar.
$lenguajes = ["Python", "Php", "Java", 1, 4, "27BCRI",];
//Mi match en la empresa
$erminal = "MUVE2600";
$devuelveTerminal = match (true) {
    $terminal = "MUVE5000" => " Muestro todos los datos de Muve 5000",
    $terminal = "MUVE2500" => " Muestro todos los datos de Muve 2500",
    $terminal = "ITOS" => " Muestro todos los datos de ITOS",
    $terminal = "V240" => " Muestro todos los datos de V240",
    default => "No encontrado, Error."
};
