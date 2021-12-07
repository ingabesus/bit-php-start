<?php
// Antra uzduotis

if( !function_exists('headingas') ) { // true arba false

    function headingas($tekstas, $tagas) {
        //echo "<h$tagas>$tekstas</h$tagas>";
        //echo '<h' . $tagas . '>' . $tekstas . '</h' . $tagas . '>';

        return "<h$tagas>$tekstas</h$tagas>";
    }

}

if( function_exists('headingas') ) {
    echo headingas('Funkcija headingas yra deklaruota', 2);
}

echo headingas('Trecia uzduotis', 1);

echo headingas('Ketvirta uzduotis', 5);

$i = 0;
while($i < 10) {
    echo headingas('Ketvirta uzduotis', 5);
    $i++;
}

function tevine_funkcija($x, $funkcija) {

    echo headingas('Gautas argumentas yra: '. $x, 1);

    call_user_func($funkcija, $x);

}

tevine_funkcija('fraze', function($reiksme) {
    print_r($reiksme);
});

$stringas = '1515165awdawdaw156126165a156';

echo headingas('1515165awdawdaw156126165a156', 1);

preg_replace_callback('/[0-9]/', function($array) {
    print_r($array[0]);
}, $stringas);
