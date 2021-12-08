<?php 

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

echo sveiki_skaiciai(186);