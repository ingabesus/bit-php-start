<?php

declare(strict_types=1);

global $globalus_kintamasis; 
// Kintamasis kuri galima pasiekti funkcijoje, net jei jis neperduodamas tarp argumentu


//Pirma užduotis
//echo '<h1>Pirma užduotis</h1>';


//Kintamuju tipai
//string - tekstas
//int - sveikas skaicius
//float - skaicius po kablelio
//bool - true arba false
function tikrinami_argumentai(string $vardas, int $amzius) {

    echo 'Žmogaus vardas: ' . $vardas;
    echo ' Žmogaus amžius: ' . $amzius . '<br />';

}

tikrinami_argumentai('Gediminas', 25);

if(!function_exists('is_array')) {

    function is_array() {

    }

}

$stringas = 'Kazkoks tekstas';

function stringu_papildymas(&$stringas) {
    
    $stringas .= ' dar papildomas tekstas';

}

stringu_papildymas($stringas);

echo $stringas;

$stringas = 15.15;

function h1($tekstas) {
    echo "<h1>$tekstas</h1>";
}

h1('Pirma užduotis');

function tekstai($tekstas, $tekstas2, $tekstas3 = 'Reiksme', $tekstas4 = false) {
    echo "<h1>$tekstas</h1>";
    echo "<h2>$tekstas2</h2>";
    echo "<h3>$tekstas3</h3>";
    echo "<h4>$tekstas4</h4>";
}

tekstai('Pirmas tekstas', 'Antras tekstas', 'Trecias tekstas');

function prideti_penkiolika($kintamasis) {
    echo 'Testinis tekstas <br />';

    return $kintamasis + 15;
}

$x = prideti_penkiolika(25);
echo $x . '<br />';



?>