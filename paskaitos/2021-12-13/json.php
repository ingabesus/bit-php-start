<?php

$target = './db.json';

function open_db_file($link) {

    $failas = fopen($link, 'r');
    $json = fread($failas, filesize($link));
    fclose($failas);

    $json = json_decode($json, true);

    return $json;

}

//Masyvo sugeneravimas

if(isset($_GET['action']) AND $_GET['action'] == 'sukurti_masyva') {

    $masyvas = [];

    for($i = 0; $i < 100; $i++) {

        for($x = 0; $x < rand(5, 20); $x++) {

            $masyvas[$i][] = rand(99, 11500);

        }

    }

    //JSON 
    $json = json_encode($masyvas);

    //file_put_contents() funkcija tam paciam atlikimui
    // if( file_put_contents($target, $json) ) {
    //     echo 'Sekmingai irasytas stringas i faila';
    // }

    $failas = fopen($target, 'w');

    if( fwrite($failas, $json) ) {
        echo 'Sekmingai irasytas stringas i faila';
    }

}

if(isset($_GET['action']) AND $_GET['action'] == 'atvaizduoti_masyva') {

    // $failas = fopen($target, 'r');
    // $json = fread($failas, filesize($target));
    // fclose($failas);

    //file_get_contents() failu atidarymo variantas
    //$json = file_get_contents($target);
    
    //echo $json;
    //I STD Tipo masyva dekodintas JSON stringas
    //$std = json_decode($json);
    //echo $std->indeksas->masyvas[0];

    //I Asociatyvaus Tipo masyva dekodintas JSON stringas
    //$json = json_decode($json, true);


    $json = open_db_file($target);

    echo '<pre>';
    print_r($json);

}

if(isset($_GET['action']) AND $_GET['action'] == 'filtruoti_masyva') {

        // $json = file_get_contents($target);
        // $json = json_decode($json);

        $json = open_db_file($target);

        foreach($json as $key => $val) {

            foreach($val as $kchild => $kval) {

                if($kval > 6500) {
                    unset($json[$key][$kchild]);
                }

            }

        }

        $json = json_encode($json);

        if( file_put_contents($target, $json) ) {
            echo 'Sekmingai isfiltravote JSON stringa';
        }

}

?>

<a href="?action=sukurti_masyva">Sukurti masyvą</a>
<a href="?action=atvaizduoti_masyva">Atvaizduoti masyva</a>
<a href="?action=filtruoti_masyva">Filtruoti masyva</a>