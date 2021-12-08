<?php 

require('../includes/sessions.php');

//Trecia uzduotis

function headingas($tekstas, $tagas) {
    return "<h$tagas>$tekstas</h$tagas>";
}

echo headingas('Trecia uzduotis', 1);

$stringas = md5(time());

preg_replace_callback('/[0-9]+/', function($res) {
    echo headingas($res[0], 1);
}, $stringas);

//Ketvirta uzduotis

echo headingas('Ketvirta uzduotis', 1);

function sveiki_skaiciai(int $skaicius) {

    $skaiciuotuvas = 0;

    for($i = 2; $i < $skaicius; $i++) {
        $rezultatas = $skaicius / $i;
        if(is_int($rezultatas))
            $skaiciuotuvas++;
    }

    return $skaiciuotuvas;
}

//Penkta uzduotis

echo headingas('Penkta uzduotis', 1);

$skaiciu_masyvas = [];
$funkcijos_masyvas = [];

for($i = 0; $i < 100; $i++) {
    
    $skaicius = rand(33, 77);
    $skaiciu_masyvas[] = $skaicius;
    $funkcijos_masyvas[] = sveiki_skaiciai($skaicius);

}

array_multisort($funkcijos_masyvas, SORT_ASC, $skaiciu_masyvas);

echo '<pre>';
print_r($skaiciu_masyvas);




function kartojimas() {

    kartojimas();

}

print_r($_SESSION);