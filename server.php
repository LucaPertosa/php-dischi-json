<?php
// Prelevo il contenuto del file .json
$string_value = file_get_contents("dischi.json");
// Estraggo solo i dati dal file
$json_array = json_decode($string_value, true);

// Preparazione della risposta
$response = [
    "results" => $$json_array,
    "success" => true
];
header('Content-Type: application/json');
// Stampo la risposta
echo json_encode($response);
?>