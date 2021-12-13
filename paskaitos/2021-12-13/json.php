<?php

$masyvas = [
    'indeksas' => [
        'masyvas' => [1, 2, 3]
    ]
];

//JSON 
//echo '<pre>';
//print_r($masyvas);
$json = json_encode($masyvas);

$failas = fopen('./db.json', 'w');
if( fwrite($failas, $json) ) {
    echo 'Sekmingai irasytas stringas i faila';
}

//I STD Tipo masyva dekodintas JSON stringas
$std = json_decode($json);
//echo $std->indeksas->masyvas[0];

//I Asociatyvaus Tipo masyva dekodintas JSON stringas
$json = json_decode($json, true);


//echo '<pre>';
//print_r($json);
