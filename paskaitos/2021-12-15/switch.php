<?php

$reiksme = rand(0, 10);
//Jeigu skaicius lygu 1, bandome atspausdinti teksta: "Skaicius yra vienas"

// if($reiksme == 0) {
//     echo 'Skaicius yra nulis';
// }

// if($reiksme == 1) {
//     echo 'Skaicius yra vienas';
// }

// if($reiksme == 2) {
//     echo 'Skaicius yra du';
// }

// if($reiksme == 3) {
//     echo 'Skaicius yra trys';
// }

// if($reiksme == 4) {
//     echo 'Skaicius yra keturi';
// }

// if($reiksme == 5) {
//     echo 'Skaicius yra penki';
// }

// if($reiksme > 5) {
//     echo 'Skaicius yra daugiau nei 5';
// }

switch($reiksme) {

    case 0:
        echo 'Skaicius yra nulis';
    break;

    case 1:
        echo 'Skaicius yra vienas';
    break;

    case 2:
        echo 'Skaicius yra du';
    break;

    case 3: 
        echo 'Skaicius yra trys';
    break;

    case 4: 
        echo 'Skaicius yra keturi';
    break;
        
    case 5: 
        echo 'Skaicius yra penki';
    break;

    default:
        echo 'Skaicius yra daugiau nei penkti';
}
