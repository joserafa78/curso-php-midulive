<?php
//llamando a una Api
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
//Recibir la Peticion y No mostrar nada
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la Peticion y Guardar el Resultado
$result = curl_exec($ch);
//Transformar el Resultado en un Array Asociativo
$data = json_decode($result, true);
//Cerrar el Curl
curl_close($ch);
