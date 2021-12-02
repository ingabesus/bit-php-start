<?php

echo '<pre>';


//Trecia uzduotis

echo '<h2>Trecia uzduotis</h2>';

$masyvas = [];
$alfabetas = 'ABCDEFHIYJKLMNOGPRSTUVZ';

for($i = 0; $i < 10; $i++) {

    for($x = 0; $x < rand(2, 20); $x++) {

        $masyvas[$i][] = $alfabetas[rand(0, strlen($alfabetas) - 1)];

    }
    asort($masyvas[$i]);
}

//print_r($masyvas);

//Ketvirta uzduotis

echo '<h2>Ketvirta uzduotis</h2>';

asort($masyvas);

$letter_k = [];

foreach($masyvas as $key => $value) {

    if(in_array('K', $value)) {

        unset($masyvas[$key]);

        $letter_k[] = $value;

    }

}

asort($letter_k);

$masyvas = array_merge($letter_k, $masyvas);




// $isrusiuotas_masyvas = [];
// $max = max($masyvas);
// $temp = [];

// foreach($masyvas as $child) {

//     echo count($child) . '   ' . count($temp) . '   ' .   count($max) .'<br />';

//     if(count($child) > count($temp)) {
//         $isrusiuotas_masyvas[] = $child;
//         //array_unshift($isrusiuotas_masyvas, $child);
//     } 

//     $temp = $child;

// }

// print_r($isrusiuotas_masyvas);



$masyvas = [
    1,
    2 => [
       1 => 'abc',
       2 => 12
    ]
]; 

//is_int() - Grazina true arba false rezultata ar paduodamas parametras yra skaicius
//is_string() - Grazina true arba false rezultata ar paduodamas parametras yra stringas
//is_array() - Grazina true arba false rezultata ar paduodamas parametras yra masyvas

foreach($masyvas as $reiksme) {

    if(is_array($reiksme)) {
        
        foreach($reiksme as $child) {

            echo $child;

        }

    } else {
        echo $reiksme;
    }

}

echo '<h1>Masyvai masyvuose</h1>';

//Pirma uzduotis

echo '<h1>Pirma uzduotis</h1>';

$masyvas = [];

for($i = 0; $i < 10; $i++) {

    for($x = 0; $x < 5; $x++) {

        $masyvas[$i][] = rand(5, 25);

    }

}

//$masyvas[] = 12;

print_r($masyvas);

echo '<h2>Pirmos uzduoties A IR B</h2>';

$skaiciuotuvas = 0;
$didziausias   = 0;

foreach($masyvas as $reiksme) {

    if(is_array($reiksme)) {

        foreach($reiksme as $sub) {

            if($sub > 10)
                $skaiciuotuvas++;

            if($sub > $didziausias)
                $didziausias = $sub;

        }

    }

    if(is_int($reiksme)) {

        if($reiksme > 10)
            $skaiciuotuvas++;

    }

}

echo 'Reiksmiu didesniu nei 10 yra: ' . $skaiciuotuvas . '<br />';
echo 'Didziausia reiksme: ' . $didziausias . '<br />';

//Pirmos uzduoties C

echo '<h2>Pirmos uzduoties C</h2>';

$sumuostas_masyvas = [];

foreach($masyvas as $index => $value) {

    //echo array_sum($value) . '<br />';

    if(is_array($value)) {

        foreach($value as $i => $n) {

            if(isset($sumuostas_masyvas[$i])) {
                $sumuostas_masyvas[$i] += $n;
            } else {
                $sumuostas_masyvas[$i] = $n;
            }


        }

    }

}

print_r($sumuostas_masyvas);

//Pirmos uzduoties D

echo '<h2>Pirmos uzduoties D</h2>';

foreach($masyvas as $i => $v) {

    for($x = 0; $x < 2; $x++) {

        $masyvas[$i][] = rand(5, 25);

    }

}

//Pirmos uzduoties E

echo '<h2>Pirmos uzduoties E</h2>';

$sumuostas_masyvas = [];

foreach($masyvas as $index => $value) {

    //echo array_sum($value) . '<br />';

    $suma = 0;

    if(is_array($value)) {

        foreach($value as $number) {

            $suma += $number;

        }

    }

    $sumuostas_masyvas[$index] = $suma; 

}

print_r($sumuostas_masyvas);


echo '<h1>2021-12-01</h1>';

//Trecia uzduotis

echo '<h2>Trecia uzduotis</h2>';

$masyvas = [];
$alfabetas = 'ABCDEFHIYJKLMNOGPRSTUVZ';

for($i = 0; $i < 10; $i++) {

    for($x = 0; $x < rand(2, 20); $x++) {

        $masyvas[$i][] = $alfabetas[rand(0, strlen($alfabetas) - 1)];

    }
    asort($masyvas[$i]);
}

//print_r($masyvas);

//Ketvirta uzduotis

echo '<h2>Ketvirta uzduotis</h2>';

$isrusiuotas_masyvas = [];
$max = max($masyvas);
$temp = $max;

foreach($masyvas as $child) {

    echo count($child) . '   ' . count($temp) . '   ' .   count($max) .'<br />';

    if(count($child) < count($temp)) {
        array_unshift($isrusiuotas_masyvas, $child);
    } else {
        $isrusiuotas_masyvas[] = $child;
    }

    $temp = $child;

}

//print_r($isrusiuotas_masyvas);





echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';


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
//array_push() prideda nauja reiksme i masyvo gala
//array_unshift prideda nauja reiksme i masyvo prieki
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

//D uzduotis

echo '<h2>Pirmos uzduoties D</h2>';

$naujas_masyvas = [];

foreach($masyvas as $indeksas => $reiksme) {

    $naujas_masyvas[] = $reiksme - $indeksas; 

}

print_r($naujas_masyvas);

//E uzduotis

echo '<h2>Pirmos uzduoties E</h2>';

for($i = 0; $i < 10; $i++) {

    $naujas_masyvas[] = rand(5, 25);

}

print_r($naujas_masyvas);

//F uzduotis

echo '<h2>Pirmos uzduoties F</h2>';

$pirmas_masyvas = [];
$antras_masyvas = [];

foreach($naujas_masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0) {
        $pirmas_masyvas[] = $reiksme;
    } else {
        $antras_masyvas[] = $reiksme;
    }

}

echo 'Pirmas masyvas: <br />';
print_r($pirmas_masyvas);
echo 'Antras masyvas: <br />';
print_r($antras_masyvas);

//G uzduotis

echo '<h2>Pirmos uzduoties G</h2>';

foreach($naujas_masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0 and $reiksme > 15)
        $naujas_masyvas[$indeksas] = 0;

}

print_r($naujas_masyvas);

//H uzduotis

echo '<h2>Pirmos uzduoties H</h2>';

$maziausias_indeksas = 0;

foreach ($naujas_masyvas as $indeksas => $reiksme) {
    
    if ($reiksme > 10) {
        $maziausias_indeksas =  $indeksas;
        break;
    }

}

echo $maziausias_indeksas;

//H uzduotis

echo '<h2>Pirmos uzduoties I</h2>';

foreach($naujas_masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0)
        unset($naujas_masyvas[$indeksas]);

}

print_r($naujas_masyvas);

//Trecia uzduotis

echo '<h1>Trecia uzduotis</h1>';

$atsiktines_raides = ['A', 'B', 'C', 'D'];
$raidziu_masyvas   = [];
$raide_a           = 0;
$raide_b           = 0;
$raide_c           = 0;
$raide_d           = 0;

for($i = 0; $i < 200; $i++) {

    $raide = $atsiktines_raides[rand(0, 3)];

    $raidziu_masyvas[] = $raide; 

    if($raide == 'A')
        $raide_a++;

    if($raide == 'B')
        $raide_b++;

    if($raide == 'C')
        $raide_c++;

    if($raide == 'D')
        $raide_d++;

}

echo 'A raidziu masyve yra: ' . $raide_a . '<br />';
echo 'B raidziu masyve yra: ' . $raide_b . '<br />';
echo 'C raidziu masyve yra: ' . $raide_c . '<br />';
echo 'D raidziu masyve yra: ' . $raide_d . '<br />';

//Ketvirta uzduotis

echo '<h1>Ketvirta uzduotis</h1>';

//Rusiavimas pagal abecele
asort($raidziu_masyvas);

print_r($raidziu_masyvas);

//Penkta uzduotis

echo '<h1>Penkta uzduotis</h1>';

$raidziu_masyvas = ['A', 'B', 'C', 'D'];
$pirmas_masyvas  = [];
$antras_masyvas  = [];
$trecias_masyvas = [];

for($i = 0; $i < 200; $i++) {

    $pirmas_masyvas[]  = $raidziu_masyvas[rand(0, 3)];
    $antras_masyvas[]  = $raidziu_masyvas[rand(0, 3)];
    $trecias_masyvas[] = $raidziu_masyvas[rand(0, 3)];

}

$naujas_masyvas = [];
$raidziu_skaiciuotuvas = 0;

foreach($pirmas_masyvas as $i => $masyvas) {

    if($pirmas_masyvas[$i] != $antras_masyvas[$i] 
        && $antras_masyvas[$i] != $trecias_masyvas[$i] 
        && $trecias_masyvas[$i] != $pirmas_masyvas[$i]){
            $raidziu_skaiciuotuvas++;
    }

    $naujas_masyvas[] = $pirmas_masyvas[$i] . $antras_masyvas[$i] . $trecias_masyvas[$i];

}

echo 'Nesikartojanciu raidziu elementuose yra: ' . $raidziu_skaiciuotuvas . '<br />';
echo 'Unikaliu kombinaciju yra: ' . count( array_unique($naujas_masyvas) );

// $naujas_masyvas[] = 'Test';

// array_unshift($naujas_masyvas, 'Test');

// print_r($naujas_masyvas);

//Sesta uzduotis

echo '<h1>Sesta uzduotis</h1>';

$pirmas_masyvas = [];
$antras_masyvas = [];

while(count($pirmas_masyvas) < 100) {

    $skaicius = rand(100, 999);

    if(in_array($skaicius, $pirmas_masyvas))
        continue;
    
    $pirmas_masyvas[] = $skaicius;

}

while(count($antras_masyvas) < 100) {

    $skaicius = rand(100, 999);

    if(in_array($skaicius, $antras_masyvas))
        continue;
    
    $antras_masyvas[] = $skaicius;

}

print_r(array_unique($pirmas_masyvas));
print_r(array_unique($antras_masyvas));

//Septinta uzduotis

echo '<h1>Septinta uzduotis</h1>';

$naujas_masyvas = [];

foreach($pirmas_masyvas as $indeksas => $reiksme) {

    if(!in_array($reiksme, $antras_masyvas)) {
        $naujas_masyvas[] = $reiksme;
    }

}

print_r($naujas_masyvas);

//Astunta uzduotis

echo '<h1>Astunta uzduotis</h1>';

$naujas_masyvas = [];

foreach($pirmas_masyvas as $indeksas => $reiksme) {

    if(in_array($reiksme, $antras_masyvas)) {
        $naujas_masyvas[] = $reiksme;
    }

}

print_r($naujas_masyvas);

//Devinta uzduotis

echo '<h1>Devinta uzduotis</h1>';

//Sprendimas su ciklais

$naujas_masyvas = [];

foreach($pirmas_masyvas as $indeksas => $reiksme) {

    $naujas_masyvas[$reiksme] = $antras_masyvas[$indeksas];

}

print_r($naujas_masyvas);

//Tas pats sprendimas pasinaudojus funkcija array_combine

$naujas_masyvas = array_combine($pirmas_masyvas, $antras_masyvas);

print_r($naujas_masyvas);

//Desimta uzduotis

echo '<h1>Desimta uzduotis</h1>';

$masyvas = [];

for($i = 0; $i < 10; $i++) {

    if($i < 2) {
        $masyvas[] = rand(5, 25);
    } else {
        $masyvas[] = $masyvas[$i - 2] + $masyvas[$i - 1];
    }

}

print_r($masyvas);


//Vienuolikta uzduotis

echo '<h1>Vienuolikta uzduotis</h1>';

$i = 0;
$masyvas = [];

while($i < 101) {

    $skaicius = rand(0, 300);

    if(!in_array($skaicius, $masyvas)) {
        $masyvas[] = $skaicius;
        $i++;
    }

}

//Ciklo aprasymas su for ciklu

// for($i = 0; $i < 101; $i++) {

//     $skaicius = rand(0, 300);

//     if(!in_array($skaicius, $masyvas)) {
//         $masyvas[] = $skaicius;
//     } else {
//         $i--;
//     }

// }

rsort($masyvas);

$ciklu_skaiciuotuvas = 1;

while(true) {

    $naujas_masyvas = [];
    $pirma_dalis = 0;
    $antra_dalis = 0;

    //print_r($masyvas);

    foreach($masyvas as $key => $val) {

        if($key != 0) { 

            if($pirma_dalis < $antra_dalis) {
                array_unshift($naujas_masyvas, $val);
                $pirma_dalis += $val;
            } else {
                array_push($naujas_masyvas, $val);
                $antra_dalis += $val;
                //$naujas_masyvas[] = $val;
            }

        } else {
            $naujas_masyvas[] = $val;
        }

    }

    $skirtumas = ($pirma_dalis > $antra_dalis) ? $pirma_dalis % $antra_dalis : $antra_dalis % $pirma_dalis;

    $ciklu_skaiciuotuvas++;

    if($skirtumas <= 30 && $naujas_masyvas[50] == $masyvas[0]) {
        break;
    }

}

echo "Uzduoti atlikti prireike $ciklu_skaiciuotuvas ciklu";
echo 'Pirmos masyvos dalies suma: ' . $pirma_dalis . '<br />';
echo 'Antros masyvos dalies suma: ' . $antra_dalis . '<br />';

print_r($naujas_masyvas);