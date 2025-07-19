<?php
$nombre = 'Jorge Eliecer';
$apellido = 'ULLOA';
$edad = 55;
$desarrollador = false;
$compara = $edad >= 18;
$efectivo = 2100;
$nota = 85;
$arrayModelos = ["Muve500", "Muve2500", "Itos", 'V240', 'Vega3000'];
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
foreach ($arrayModelos as $valor) {
    echo "";
}

$modelosTerminales = array(
    'Muve500' => 'Muestra los Pdf',
    'Muve2500' => 'Muestra Pdf y fOTOS',
    'Itos' => 'Muestra solo Apuntes en Libretas',
    'V240' => 'Muestra solo Audios',
    'Vega3000' => 'Muestra Pagina HTML y Fotos'
);
$arrayModeloTerm = array(
    ['modelo' => 'Muve5000', 'contenido' => 'Apuntes en PDF y Fotos Audios y Videos...'],
    ['modelo' => 'Muve2500', 'contenido' => 'Apuntes en PDF y Apuntes..loco'],
    ['modelo' => 'Itos', 'contenido' => 'Apuntes en PDF'],
    ['modelo' => 'V240', 'contenido' => 'Apuntes en PDF'],
    ['modelo' => 'Vega3000', 'contenido' => 'Apuntes en PDF Cuaderno y Preguantar a David'],
);
$miModelo = 'Vega3000';
$valorSalidaMatch = match (true) {
    $arrayModeloTerm[0]['modelo'] ===  $miModelo => $arrayModeloTerm[0]['contenido'],
    $arrayModeloTerm[1]['modelo'] ===  $miModelo => $arrayModeloTerm[1]['contenido'],
    $arrayModeloTerm[2]['modelo'] ===  $miModelo => $arrayModeloTerm[2]['contenido'],
    $arrayModeloTerm[3]['modelo'] ===  $miModelo => $arrayModeloTerm[3]['contenido'],
    $arrayModeloTerm[4]['modelo'] ===  $miModelo => $arrayModeloTerm[4]['contenido'],
    default => "Error, No se Encontro..Gracias..."
};
