<?php

echo '<pre>';

//Masyvai

//Paprastas masyvas
$masyvas = ['Maksima', 'Rimi', 'Iki', 'Lidl', 'norfa'];

$masyvas['indeksas'] = 'ExpressMarket';
$masyvas[] = 'Silas';

//Asociatyvus masyvas
$masyvas = ['parduotuve1' => 'Maksima', 'parduotuve2' => 'Rimi', 
            'parduotuve3' => 'Iki', 'parduotuve4' => 'Lidl', 
            'parduotuve5' => 'Norfa'];
    

$masyvas['parduotuve1'] = [
    'adresas1' => 'Kazkoks adresas 123',
    'dar vienas adresas',
    'trecias adresas'
];

// echo '<pre>';
// print_r($masyvas);

//is_array() Nusako ar kintamasis yra masyvas ar ne. Grazina true arba false
//is_string() grazina true arba false atsakyma ar kintamasis yra stringas

$filtruotas_masyvas = [];

foreach($masyvas as $indeksas => $reiksme) {

    //$masyvas[$indeksas] = 'Test';

    if(!is_array($reiksme)) {
        $filtruotas_masyvas[$indeksas] = $reiksme;
    }

}

// echo '<pre>';
// print_r($filtruotas_masyvas);

//sort() Funkcija paprasto masyvo rusiavimui nuo maziausios reiksmes iki didziausios
//rsort() Funkcija paprasto masyvo rusiavimui nuo didziausios reiksme iki maziausios
//asort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksmes iki didziausios
//ksort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksme iki didziausios pagal indeksa
//arsort() Funkcija rusiuoti asociatyviems masyvams nuo didziausios reiksmes iki maziausios
//krsort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksmes iki didziausios
//array_keys() Grazina masyvo reiksmes indeksa
//array_merge() Sujungia du masyvus i viena
//array_pop() Paima paskutine masyve esancia reiksme
//array_shift() Panaikina pirma reiksme is masyvo
//array_slice() Istraukia dali masyvo
//array_splice() Panaikiname dali masyvo
//array_reverse() Veikia su abiejais tipais
//array_replace() Sukeicia masyve esancias reiksmes
//array_search() iesko teksto masyve
//array_push() prideda nauja reiksme
//array_unique() Isfiltruoja masyva, kad jame liktu tik unikalios reiksmes
//https://www.php.net/manual/en/function.array-unique
//unset() - Pasalina norima indeksa is masyvo
//array_key_exists() - Patikrina ar indeksas egzistuoja
//array_sum() - Susumuoja visas reiksmes masyve

//$filtruoto_masyvos_indeksas = array_keys($filtruotas_masyvas, 'Norfa');

//Sujungti du masyvus i viena

$masyvas_antras = [25, 60, 51, 40];
//$filtruotas_masyvas[] = $masyvas_antras;

$naujas_sujungtas_masyvas = array_merge($filtruotas_masyvas, $masyvas_antras);

$paskutinis_reiksme = array_pop($naujas_sujungtas_masyvas);

array_shift($naujas_sujungtas_masyvas);

$istrauktas_masyvas = array_slice($naujas_sujungtas_masyvas, 2, 2);
$masyvas_naikinimui = $naujas_sujungtas_masyvas;

array_splice($masyvas_naikinimui, 3);

$atvirkscias_masyvas = array_reverse($naujas_sujungtas_masyvas);

$masyvas_sukeisti_reiksmes = [0 => 'Pakeista1', 1 => 'Pakeista2', 2 => 'Pakeista3'];

$sukeistos_masyvo_reiksmes = array_replace($atvirkscias_masyvas, $masyvas_sukeisti_reiksmes);

$ieskomas_tekstas = array_search('Norfa', $sukeistos_masyvo_reiksmes);


$sukeistos_masyvo_reiksmes[] = 55;

array_push($sukeistos_masyvo_reiksmes, 'Array push pridetas tekstas');

$sukeistos_masyvo_reiksmes[] = 'Norfa';

$unikalus_masyvas = array_unique($sukeistos_masyvo_reiksmes);

unset($unikalus_masyvas['parduotuve3']);

if(array_key_exists( 'parduotuve5', $unikalus_masyvas) )
    echo 'Indeksas egzistuoja';

print_r($unikalus_masyvas);

$skaiciu_masyvas = [0,15,22,52,10523,15128,189156];

echo array_sum($skaiciu_masyvas);

//Masyvai

echo '<h1>Masyvu uzduotys</h1>';

//Pirma uzduotis

echo '<h2>Pirma uzduotis</h2>';

$masyvas = [];

for($i = 0; $i < 30; $i++) {

    $skaicius = rand(5, 25);

    $masyvas[] = $skaicius;

}

print_r($masyvas);

//A uzduotis

echo '<h2>Pirmos uzduoties A</h2>';

$reiksmes = 0;

foreach($masyvas as $skaicius) {

    if($skaicius > 10)
        $reiksmes++;

}

echo $reiksmes;

//B uzduotis

echo '<h2>Pirmos uzduoties B</h2>';

$didziausios_reiksmes_indeksas = array_keys($masyvas, max($masyvas));

//count() - grazina skaiciu kiek turime reiksmiu masyve

foreach($didziausios_reiksmes_indeksas as $indeksas) {

    echo 'Reiksme: ' . $masyvas[$indeksas] . ' Indeksas:'. $indeksas . '<br />';

}

//C uzduotis

echo '<h2>Pirmos uzduoties C</h2>';

$reiksmiu_suma = 0;

foreach($masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0)
        $reiksmiu_suma += $reiksme;

}

echo $reiksmiu_suma;