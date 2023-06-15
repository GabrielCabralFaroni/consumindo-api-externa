<?php
$url = "https://swapi.dev/api/planets/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resultado = json_decode(curl_exec($ch));

$planetas = [];

foreach ($resultado->results as $planeta) {
  $planetas[] = [
    'nome' => $planeta->name,
    'rotacao' => $planeta->rotation_period,
    'orbitalPeriodo' => $planeta->orbital_period,
    'diametro' => $planeta->diameter,
    'clima' => $planeta->climate,
    'gravidade' => $planeta->gravity,
    'terreno' => $planeta->terrain,
    'aguaSuperficie' => $planeta->surface_water,
    'populacao' => $planeta->population,
  ];
}

echo json_encode($planetas);
?>











