<?php

    // $x = 2;
    // $pirminis = true; 

    // for($i = 2; $i <= ($x / 2); $i++) {

    //     if($x % $i == 0)
    //         $pirminis = false; 
            
    // }

    // if($pirminis)
    //     echo 'Pirminis';
    // else 
    //     echo 'Nera pirminis';
    




    // $stringas = '';
    // $masyvas = [];
    // $count = 0;

    // for($i = 0; $i < 200; $i++) {

    //     $skaicius = rand(0, 200);

    //     if(!in_array($skaicius, $masyvas))
    //         $masyvas[] = $skaicius;

    //     if(strlen(str_replace(' '.$skaicius.' ', '  ', $stringas)) == strlen($stringas)) {
    //         $stringas .= $skaicius. ' ';
    //         $count++;
    //     }

    // }

    // echo $count.'<br />';
    // echo $stringas.'<br />';
    // print_r($masyvas);


    // echo '<h1>Skaiciu stringo generavimas</h1>';


    $masyvas = [];

    for($i = 0; $i < 50; $i++) {

        $skaicius = rand(1, 200);

        if(!in_array($skaicius, $masyvas)) {
            $masyvas[] = $skaicius;
        }

    }

    sort($masyvas);

    foreach($masyvas as $skaicius) {

        $pirminis = true; 

        for($i = 2; $i <= ($skaicius / 2); $i++) {

            if($skaicius % $i == 0)
                $pirminis = false; 
                
        }

        if($pirminis)
            echo $skaicius . ' ';

    }












    echo '<h1>Vinies kalimas</h1>';

    $vinys = 5;
    $vinies_ilgis = 85; 
    $bendras_ilgis = $vinys * $vinies_ilgis;
    $smugis = 1;
    $ikalta = 0;
    
    //A Variantas

    echo '<h2>A Variantas</h2>';

    while(true) {

        $ikalta += rand(5, 20);
        $smugis++;

        if($ikalta >= $bendras_ilgis) {
            echo 'Prireike smugiu: ' . $smugis;
            break;
        }
    }


    //B Variantas

    echo '<h2>B Variantas</h2>';

    $smugis = 1;
    $ikalta = 0;

    while(true) {

        $tikimybe = mt_rand(0, 1);

        if($tikimybe == 1) {
            $ikalta  += rand(20, 30);
            $smugis++;
        }

        if($ikalta >= $bendras_ilgis) {
            echo 'Prireike smugiu: ' . $smugis;
            break;
        }

    }

    echo '<h1>Vinies kalimas Alternatyvi versija</h1>';

    $vinys = 5;
    $vinies_ilgis = 85; 
    $smugiai = 1;
    $ikalta = 0;
    
    //A Variantas

    echo '<h2>A Variantas</h2>';

    $i = 1;

    while($i <= $vinys) {

        $ikalta = 0;
        $smugis = 1;

        while($ikalta <= $vinies_ilgis) {

            $ikalta += rand(5, 20);
            $smugis++;
            $smugiai++;

        }

        echo $i . ' vinis sėkmingai įkaltas <br />';

        $i++;
    }

    echo $vinys . ' vinis prireike kalti ' . $smugiai . ' smūgiais.';



    //B Variantas

    echo '<h2>B Variantas</h2>';



    //Erroru tipai
    // Pirmas tipas: Fatal Error 
    // Antras tipas: Notice
    // Trecias tipas: Warning


    //Masyvu pildymas cikle

    $masyvas = array(); // Arba tiesiog lauztiniai skliaustai []

    for($i = 0; $i < 10; $i++) {

        $masyvas[] = $i; //Prie auksciau sukurto masyvo pridedame cikle sukurta reiksme

    }
    echo '<pre>';
    print_r($masyvas);
    echo '</pre>';

    $stringas = '';

    $stringas .= 'awd';
    $stringas .= 'awdaw';
    

    //Ciklas cikle

    $x = 0;
    $y = 0;

    while($x < 10) {

        $duomenys = true;
        
        while($y < 5) {

            if($duomenys) {

                echo 'test <br />';
            }

            $y++;

        }

        $x++;

    }


    $i = true;
    $skaiciuotuvas = 0;

    while($i) {

        $skaiciuotuvas++;

        if($skaiciuotuvas > 5)
            break;
        
    }

    echo $skaiciuotuvas;


    //Trecia uzduotis

    echo '<h2>Skaiciu be liekanos skaiciavimas</h2>';

    $i = 1;
    $max = 3000;

    while($i <= $max) {

        $skaicius = $i / 77;

        if(round($skaicius) == $skaicius) {

            echo $i;

            if($i < $max - 77)
                echo ', ';

        }

        // if( !fmod($i, 77) ) {
        //     echo $i;

        //     if($i < $max - 77)
        //         echo ', ';

        // }

        $i++;
    }

    //Ketvirta uzduotis

    echo '<h2>Kvadratas</h2>';

    echo '<div style="line-height: 7px;">';

    $dydis  = 25;
    $suma   = $dydis * $dydis;
    $eilute = 1;
    $kaire  = 1;
    $desine = $dydis;

    for($i = 1; $i <= $suma; $i++ ) {

        if($eilute == $kaire || $eilute == $desine) {
            echo '<span style="color:red;">*</span>';
        } else {
            echo '*';
        }

        if($eilute == $dydis) {

            echo '<br />';
            $eilute = 0;
            $kaire++;
            $desine--;
        }

        $eilute++;

    }

    echo '</div>';

    //Sesta uzduotis

    echo '<h2>Sesta uzduotis</h2>';

    //A Salyga

    echo '<h3>A Salyga</h3>'; 

    $i = true;

    while($i) {

        $skaicius = rand(0, 1);

        if($skaicius == 1) {

            echo 'S';

        } else {
          
            echo 'H';

            $i = false;

        }

    }

   echo '<h3>B Salyga</h3>'; 

    //B Salyga

    $herbu_skaitiklis = 0;

    do {

        $skaicius = rand(0, 1);

        if($skaicius == 1) {

            echo 'S';

        } else {
          
            echo 'H';
            
            $herbu_skaitiklis++;

        }

        if($herbu_skaitiklis > 2)
            break;

    } while(true);

    //Salyga

    echo '<h3>C Salyga</h3>'; 

    $herbu_skaitiklis = 0;

    while(true) {

        $skaicius = rand(0, 1);

        if($skaicius == 1) {

            echo 'S';

            $herbu_skaitiklis = 0;

        } else {
          
            echo 'H';
            
            $herbu_skaitiklis++;

        }

        if($herbu_skaitiklis > 2)
            break;

    }


    //Ciklai 2021-11-16

    echo '<h2>Ciklai 2021-11-16</h2>';

    //Break, Continue komandos;

    // $i = 0;

    // while($i < 100) {

    //     $i++;

    //     if($i > 10 && $i < 20) 
    //         continue;
    //         //break;

    //     echo $i. '<br />';
        
    // }
    
    //Foreach ciklas

    $tekstas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

    $explode = explode(' ', $tekstas);

    $zodziu_skaiciuotuvas = 0;

    //Su foreach funkcija

    // foreach($explode as $zodis) {

    //     if( strlen($zodis) <= 5 )
    //         $zodziu_skaiciuotuvas++;

    // }

    //For versija tai paciai uzduociai
    
    $max = count($explode);

    for($i = 0; $i < $max; $i++) {

        if( strlen($explode[$i]) <= 5 )
            $zodziu_skaiciuotuvas++;

    }

    //echo $zodziu_skaiciuotuvas;


    for($i = 0; $i < 10; $i++) {

        echo '<br /> <span style="color: green;">Test $i</span> <br />';

        for($x = 0; $x < 10; $x++) {
            
            if($i == $x) 

            echo '<span style="color: red;">Test $x</span>, ';

            for($y = 0; $y < 10; $y++) {


                echo '<span style="color: blue;">Test $y</span>, ';
    
            }

        }

    }


    //Foreach versija pasiimant indeksa ir reiksme

    // foreach($explode as $indeksas => $reiksme) {

    //     echo $indeksas . ' ' . $reiksme . '<br />';

    // }

    


    // if(strlen($explode[0]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[1]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[2]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[3]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[4]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[5]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[6]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[7]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[8]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[9]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[10]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[11]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[12]) <= 5)
    //     $zodziu_skaiciuotuvas++;
    // if(strlen($explode[13]) <= 5)
    //     $zodziu_skaiciuotuvas++;


    // echo $zodziu_skaiciuotuvas;


    //echo 'Hello World!';

    // var 
    // let 
    // const

    //$kintamasis = 'Pirmasis sukurtas kintamasis';

    //echo $kintamasis . ' ir prie jo pridėtas tekstas';

    // $x = 2;
    // $y = 5;

    // echo ($x * $y);

    // $x = '5';
    // $y = '10';

    // echo ($x * $y);

    // $kitaskintamasis = "test $x";

    // echo $kitaskintamasis;

    //echo date('Y-m-d');

    //echo rand(0, 10);

    // $i = rand(5, 25);
    // $x = rand(0, 10) / 0.3;

    // echo 'Pirmasis random skaičius: ' . $i . '<br />';
    // echo 'Antrasis random skaičius: ' . number_format($x, 2, '.', ',') . '<br />';

    // if($i > $x ) {


    // } else {

    // }
    //2021-11-03 07:37:52
    //echo date('D M j G:i:s T Y');

    //date_create()

    //echo time();

    //$data_numeris1 = '2021-10-20';
    //$data_numeris2 = '2021-11-03';

    //echo date_create($date);

    //$skirtumas = date_diff(date_create($data_numeris1), date_create($data_numeris2));
    
    //date_diff();
    //date_create();

    //echo $skirtumas->format('%y');

    //min() //Grąžina mažiausią reikšmę iš paduotų
    //max() //Grąžina didžiausią reikšmę iš paduotų

    //echo max(1,5,6,8,2);

    //Skaiciuojam reiksmes

    // $skaiciuotuvas = 0;
    // $kondicija = true;

    // if($kondicija)
    //     $skaiciuotuvas++;

    // if($kondicija)
    //     $skaiciuotuvas++;

    // if($kondicija)
    //     $skaiciuotuvas++;

    // echo $skaiciuotuvas . '<br />';
    
    /* Pirma uzduotis */
    
    echo '<h1>Pirma užduotis</h1>';

    //Susikuriame kintamuosius su atsitiktiniais skaiciais
    $pirma_a = rand(0, 4);
    $pirma_b = rand(0, 4);
    $rezultatas = 0;

    echo 'Pirmas skaičius: ' . $pirma_a . ' Antras skaičius: ' .$pirma_b . '<br />';
    
    //Sutikriname kuri reiksme yra didesne

    if($pirma_a != 0 && $pirma_b != 0) {

        if($pirma_a > $pirma_b) {
            $rezultatas = $pirma_a / $pirma_b;
        } else {
            $rezultatas = $pirma_b / $pirma_a;
        }

        echo 'Rezultatas: ' . number_format($rezultatas, 2);

    } else {

        echo 'Dalyba iš nulio negalima';

    }

    /* Trečia uzduotis */

    echo '<h1>Trečia užduotis</h1>';

    $vardas = 'Vilius';
    $pavarde = 'Ramulionis';
    $gimimo_data = date_create('1990-11-21');
    $dabartine_data = date_create( date('Y-m-d') );

    $amzius = date_diff($gimimo_data, $dabartine_data);
    $amzius2 = $amzius->format('%y');

    echo 'Aš esu ' . $vardas . ' ' . $pavarde . '. Man yra ' . $amzius->format('%y') . ' metai(ų)';
    
    echo '<br />';

    echo "Aš esu $vardas $pavarde. Man yra $amzius2 metai(ų) <br />";

    
    /* Ketvirta uzduotis */

    echo '<h1>Ketvirta uzduotis</h1>';

    $ketvirta_a = rand(0, 25);
    $ketvirta_b = rand(0, 25);
    $ketvirta_c = rand(0, 25);
    
    $mediana = max(
        min( $ketvirta_a, $ketvirta_b),    
        min( max($ketvirta_a, $ketvirta_b), $ketvirta_c)
    );

    echo 'Pirmas random skaičius: ' . $ketvirta_a . 
    ' Antras skaicius: ' . $ketvirta_b . 
    ' Trecias skaicius: ' . $ketvirta_c . '<br />';

    echo 'Mediana: ' . $mediana;

    /* Penkta uzduotis */

    echo '<h1>Penkta uzduotis</h1>';

    $penkta_a = rand(0, 2);
    $penkta_b = rand(0, 2);
    $penkta_c = rand(0, 2);
    $penkta_d = rand(0, 2);

    $nulio_skaciuotuvas = 0;
    $vienetu_skaciuotuvas = 0;
    $dvejetu_skaciuotuvas = 0;

    if($penkta_a == 0)
        $nulio_skaciuotuvas++;

    if($penkta_a == 1)
        $vienetu_skaciuotuvas++;

    if($penkta_a == 2)
        $dvejetu_skaciuotuvas++;

    if($penkta_b == 0)
        $nulio_skaciuotuvas++;

    if($penkta_b == 1)
        $vienetu_skaciuotuvas++;

    if($penkta_b == 2)
        $dvejetu_skaciuotuvas++;

    if($penkta_c == 0)
        $nulio_skaciuotuvas++;

    if($penkta_c == 1)
        $vienetu_skaciuotuvas++;

    if($penkta_c == 2)
        $dvejetu_skaciuotuvas++;

    if($penkta_d == 0)
        $nulio_skaciuotuvas++;

    if($penkta_d == 1)
        $vienetu_skaciuotuvas++;

    if($penkta_d == 2)
        $dvejetu_skaciuotuvas++;

    echo "Gauti skaiciai: $penkta_a, $penkta_b, $penkta_c, $penkta_d <br />";

    echo "Nuliai: $nulio_skaciuotuvas, Vienetai: $vienetu_skaciuotuvas, Dvejetai: $dvejetu_skaciuotuvas";

    /* Sesta uzduotis */
    
    $sesta_x = rand(1, 6);

    echo "<h$sesta_x>$sesta_x</h$sesta_x>";

    /* Variantas kaip atlikti uzduoti naudojantis if'u pagalba */

    // if($sesta_x == 1)
    //     echo '<h1>1</h1>';

    // if($sesta_x == 2)
    //     echo '<h2>2</h2>';

    // if($sesta_x == 3)
    //     echo '<h3>3</h3>';

    // if($sesta_x == 4)
    //     echo '<h4>4</h4>';

    // if($sesta_x == 5)
    //     echo '<h5>5</h5>';

    // if($sesta_x == 6)
    //     echo '<h6>6</h6>';

    // echo '<span style="color: red;">2</span>';



    /* Septinta uzduotis */

    echo '<h1>Septinta uzduotis</h1>';

    $septinta_a = rand(-10, 10);
    $septinta_b = rand(-10, 10);
    $septinta_c = rand(-10, 10);

    if($septinta_a < 0)
        echo "<span style=\"color: green;\">$septinta_a</span> ";
    if($septinta_a > 0)
        echo "<span style=\"color: blue;\">$septinta_a</span> ";
    if($septinta_a == 0)
        echo "<span style=\"color: red;\">$septinta_a</span> ";

    if($septinta_b < 0)
        echo "<span style=\"color: green;\">$septinta_b</span> ";
    if($septinta_b > 0)
        echo "<span style=\"color: blue;\">$septinta_b</span> ";
    if($septinta_b == 0)
        echo "<span style=\"color: red;\">$septinta_b</span> ";

    if($septinta_c < 0)
        echo "<span style=\"color: green;\">$septinta_c</span> ";
    if($septinta_c > 0)
        echo "<span style=\"color: blue;\">$septinta_c</span> ";
    if($septinta_c == 0)
        echo "<span style=\"color: red;\">$septinta_c</span> ";



    /* Astunta uzduotis */

    echo '<h1>Astunta uzduotis</h1>';

    $kiekis = rand(5, 3000);
    $nuolaida = 0;

    if($kiekis > 1000)
        $nuolaida = 3;

    if($kiekis > 2000)
        $nuolaida = 4;

    $suma = $kiekis - ( ($kiekis / 100) * $nuolaida );

    echo "<br>Perkamas prekių kiekis yra $kiekis<br/>";
    echo "<br>Perkamu prekiu suma $suma<br/>";

    // echo $kiekis . '<br />';

    // $bool = true;

    // $nuolaida = $bool ? $nuolaida = 3 : $nuolaida = 0;

    // if($bool):
    //     echo 'test';
    // endif;

    //? - if kondicija teisinga
    //: = else 

    /* Devinta uzduotis */

    // echo '<h1>Devinta uzduotis</h1>';

    // $devinta_a = rand(0, 100);
    // $devinta_b = rand(0, 100);
    // $devinta_c = rand(0, 100);
    // $suma = 0;
    // $kiekis = 0;

    // //Aritmetinis vidurkis
    // $vidurkis = round( ($devinta_a + $devinta_b + $devinta_c) / 3 );

    // echo "Reikšmių $devinta_a, $devinta_b ir $devinta_c aritmetinis vidurkis yra: $vidurkis <br />";

    // if($devinta_a > 10 && $devinta_a < 90) {
    //     $suma += $devinta_a;
    //     $kiekis++;
    // }

    // if($devinta_b > 10 && $devinta_b < 90) {
    //     $suma += $devinta_b;
    //     $kiekis++;
    // }

    // if($devinta_c > 10 && $devinta_c < 90) {
    //     $suma += $devinta_c;
    //     $kiekis++;
    // }

    // $vidurkis = ($kiekis > 0) ? round($suma / $kiekis) : 0;

    // echo "Išmetus reikšmes kurios mažesnės už 10 ir didesnės už 90 vidurkis yra: $vidurkis";

        

    // /* Desimta uzduotis */

    // echo '<h1>Desimta uzduotis</h1>';

    // $hours   = rand(0, 23);
    // $minutes = rand(0, 59);
    // $seconds = rand(0, 59);
    // $random_seconds = rand(0, 300);

    // $current_time = date("H:i:s", strtotime("$hours:$minutes:$seconds"));

    // echo 'Gautas laikas: ' . $current_time . '<br />';

    // $new_time = date("H:i:s", strtotime("$hours:$minutes:$seconds") + $random_seconds);

    // echo "Pridejus $random_seconds sekundes laikas yra: $new_time";





    
    echo "<h1>Naujos funkcijos 2021-11-08</h1>";

    $devinta_skaicius = 1.88;

    //echo round($devinta_skaicius);
    //echo ceil($devinta_skaicius);
    //echo floor($devinta_skaicius);


    /* Devinta uzduotis */

    echo '<h1>Devinta uzduotis</h1>';
    
    $a = rand(0, 100);
    $b = rand(0, 100);
    $c = rand(0, 100);
    $suma = 0;
    $kiekis = 0;
    
    $vidurkis = round( ($a + $b + $c) / 3 );

    echo "Gauti skaiciai yra $a, $b, $c, o ju vidurkis yra: $vidurkis <br />";

    if($a > 10 && $a < 90) {
        $suma += $a;
        $kiekis++;
    }

    if($b > 10 && $b < 90) {
        $suma += $b;
        $kiekis++;
    }

    if($c > 10 && $c < 90) {
        $suma += $c;
        $kiekis++;
    }

    $vidurkis = ($kiekis > 0) ? round($suma / $kiekis) : 0;

    echo "Naujas vidurkis: $vidurkis";

    /* Desimta uzduotis */

    echo '<h1>Desimta uzduotis</h1>';

    $hours = rand(0, 23);
    $minutes = rand(0, 59);
    $seconds = rand(0, 59);
    $random_seconds = rand(0, 300);

    $pirmas_laikrodis = date('H:i:s', strtotime("$hours:$minutes:$seconds"));

    echo "Sugeneruotas atsitiktinis laikas yra: $pirmas_laikrodis <br />";
    
    //mktime()

    $antras_laikrodis = date('H:i:s', strtotime("$hours:$minutes:$seconds") + $random_seconds);

    echo "Pridejus $random_seconds sekundes, naujas laikas yra: $antras_laikrodis";


    echo '<h1>Funkcijos stringams apdoroti</h1>';

    //Funkcijos stringams apdoroti

    //strlen(string) - Ši funkcija grąžina stringo ilgį
    //trim() - Pašalina empty space simbolius iš stringo priekio ir galo
    //str_replace() Sukeicia norimus simbolius, pasirinktais
    //strtoupper() - Pavercia teksta didziosiomis raidemis
    //strtolower() - Pavercia teksta mazosiomis raidemis
    //str_repeat() - Pakartoja teksta pasirinkta kieki kartu
    //strip_tags() - Pasalina html tag'us is teksto

    $stringas = ' Labas vakaras ';
    $stringas2 = 'Gera diena';
    $stringas3 = 'Tekstas turintis <br />';

    echo $stringas . '<br />';
    echo strlen($stringas) . '<br />';
    echo trim($stringas) . '<br />';
    
    $replaced_string = str_replace('Labas', 'Viso gero', $stringas);
    
    echo $replaced_string . '<br />';

    $replaced_string = str_replace(' ', '', $stringas);
    
    echo strlen($replaced_string) . '<br />';

    echo strtoupper($stringas) . '<br />';

    echo strtolower($stringas) . '<br />';

    echo substr($stringas2, 0, -(strlen($stringas2) - 3)) . '<br />';

    echo str_repeat($stringas, 5) . '<br />';

    echo strip_tags($stringas3) . '<br />';

    echo strpos($stringas2, 'a') . '<br />';

    $stringas = 'Ląbas Vakaras';

    echo mb_strlen($stringas) . '<br />';

    //echo mb_substr($stringas, 0, -12);

    $stringas = 'Testas';

    $stringas .= ' Testas2';

    if(strlen($stringas) > 5)
        $stringas .= ' po if kondicijos';

    echo $stringas . '<br />';

    echo '<h3>Explode Funkcija</h3>';

    $stringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    
    $explode = explode(' ', $stringas);

    echo '<pre>';

    print_r($explode);

    echo '</pre>';

    //implode()

    //Stringai

    echo '<h1>Stringai</h1>';

    echo '<h2>Pirma užduotis</h2>';
    
    $aktoriaus_vardas = 'Dzonas';
    $aktoriaus_pavarde = 'Travolta';

    if(strlen($aktoriaus_vardas) < strlen($aktoriaus_pavarde)) {
        echo $aktoriaus_vardas;
    } else {
        echo $aktoriaus_pavarde;
    }

    echo '<h2>Antra užduotis</h2>';

    echo strtoupper($aktoriaus_vardas) . ' ' . strtolower($aktoriaus_pavarde);
 
    echo '<h2>Trečia užduotis</h2>';

    echo substr($aktoriaus_vardas, 0, 1) . substr($aktoriaus_pavarde, 0, 1);

    echo '<h2>Ketvirta užduotis</h2>';

    $apr = substr($aktoriaus_vardas, strlen($aktoriaus_vardas) - 3, 3) 
    . substr($aktoriaus_pavarde, strlen($aktoriaus_pavarde) - 3, 3);

    echo $apr;

    echo '<h2>Penkta užduotis</h2>';

    $movie1 = 'An American in Paris';

    echo str_replace('a', '*', str_replace('A', '*', $movie1));

    echo '<h2>Šešta užduotis</h2>';

    $movie1 = strtolower($movie1);

    // $movie1 = str_replace(' ', '', $movie1);
    // $movie1 = str_replace('b', '', $movie1);
    // $movie1 = str_replace('c', '', $movie1);
    // $movie1 = str_replace('d', '', $movie1);
    // $movie1 = str_replace('e', '', $movie1);
    // $movie1 = str_replace('f', '', $movie1);
    // $movie1 = str_replace('g', '', $movie1);
    // $movie1 = str_replace('h', '', $movie1);
    // $movie1 = str_replace('i', '', $movie1);
    // $movie1 = str_replace('j', '', $movie1);
    // $movie1 = str_replace('k', '', $movie1);
    // $movie1 = str_replace('l', '', $movie1);
    // $movie1 = str_replace('m', '', $movie1);
    // $movie1 = str_replace('n', '', $movie1);
    // $movie1 = str_replace('o', '', $movie1);
    // $movie1 = str_replace('p', '', $movie1);
    // $movie1 = str_replace('q', '', $movie1);
    // $movie1 = str_replace('r', '', $movie1);
    // $movie1 = str_replace('s', '', $movie1);
    // $movie1 = str_replace('t', '', $movie1);
    // $movie1 = str_replace('u', '', $movie1);
    // $movie1 = str_replace('v', '', $movie1);
    // $movie1 = str_replace('w', '', $movie1);
    // $movie1 = str_replace('x', '', $movie1);
    // $movie1 = str_replace('y', '', $movie1);
    // $movie1 = str_replace('z', '', $movie1);

    //echo strlen($movie1);

    echo substr_count($movie1, 'a');

    echo '<h2>Septinta užduotis</h2>';

    $movie1 = 'An American in Paris';

    $movie1 = str_replace('A', '', $movie1);
    $movie1 = str_replace('a', '', $movie1);
    $movie1 = str_replace('E', '', $movie1);
    $movie1 = str_replace('e', '', $movie1);
    $movie1 = str_replace('I', '', $movie1);
    $movie1 = str_replace('i', '', $movie1);
    $movie1 = str_replace('Y', '', $movie1);
    $movie1 = str_replace('y', '', $movie1);
    $movie1 = str_replace('O', '', $movie1);
    $movie1 = str_replace('o', '', $movie1);
    $movie1 = str_replace('U', '', $movie1);
    $movie1 = str_replace('u', '', $movie1);

    echo $movie1;

    echo '<h2>Aštunta užduotis</h2>';

    $series = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

    echo str_replace('Star Wars: Episode ', '', str_replace(' - A New Hope', '', $series));

    echo '<h2>Devinta užduotis</h2>';

    $tekstas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

    $explode = explode(' ', $tekstas);

    $zodziu_skaiciuotuvas = 0;

    if(strlen($explode[0]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[1]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[2]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[3]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[4]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[5]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[6]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[7]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[8]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[9]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[10]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[11]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[12]) <= 5)
        $zodziu_skaiciuotuvas++;
    if(strlen($explode[13]) <= 5)
        $zodziu_skaiciuotuvas++;


    echo $zodziu_skaiciuotuvas;

    echo '<h2>Dešimta užduotis</h2>';
    
    $alfabetas = "a b c d e f g h i k l m n";
                  
    $alfabetas_masyvas = explode(' ', $alfabetas);

    $alfabetas = str_replace(' ', '', $alfabetas);

    echo $alfabetas_masyvas[rand(0, strlen($alfabetas) -1)] .
         $alfabetas_masyvas[rand(0, strlen($alfabetas) -1)] .
         $alfabetas_masyvas[rand(0, strlen($alfabetas) -1)];


    //Ciklai

    echo '<h1>Ciklai</h1>';

    //Inifinite Loop
    // while(1 < 20) {
    //     echo 'Test';
    // }

    // $i = 0;
    // $max = 35;
    // $stringas = 'Test';
    // $counter = 0;

    // while($i < $max) {

    //     if($i > 15) {
    //         $stringas .= 'KareemAbdulJabar';
    //     } else {
    //         $stringas .= $i;
    //     }

    //     $stringas = substr($stringas, 0, 1);

    //     $i++;

    // };

    // echo $stringas;

    // $i = 0; 
    
    // echo '<div style="word-break: break-all;">';

    // while($i < 400) {
    //     echo '*';

    //     $i++;
    // }

    // echo '</div>';
    

    // $i = 0;

    // while($i < 400) {

    //     if($i != 0) {
    //         if ($i % 50 == 0) {
    //             echo '<br />';
    //         }
    //     }

    //     echo '*';

    //     $i++;
    // }

    

    // for($s = 0; $s < 400; $s++) { 
    //     rand();
    //     echo '*';

    // }
    
    $i = 0;
    $skaiciuotuvas = 1;

    while($i < 300) {
        $skaicius = rand(0, 300);

        if($skaicius > 275) 
            echo '<span style="color: red;">' . $skaicius . '</span> ';
        else 
            echo $skaicius . ' ';


        if($skaicius > 150)
            $skaiciuotuvas++;

        $i++;
    }

    echo 'Isviso buvo skaiciu kuriu reiksme didesne negu 150: ' . $skaiciuotuvas;












    // if(isset($_POST['skaicius1']) && isset($_POST['skaicius2']))
    //     echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius1'] + $_POST['skaicius2']);


    // if(isset($_POST['skaicius3']) && isset($_POST['skaicius4']))
    //     echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius3'] - $_POST['skaicius4']);


    // if(isset($_POST['skaicius5']) && isset($_POST['skaicius6']))
    //     echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius5'] * $_POST['skaicius6']);


    // if(isset($_POST['skaicius7']) && isset($_POST['skaicius8']))
    //     echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius7'] / $_POST['skaicius8']);

    //if(isset($_GET['skaicius1']) || isset($_GET['skaicius2']);

?>
<!--
<h1>Sudėtis</h1>

<form method="POST">
    <input type="number" name="skaicius1" value="15" readonly />
    <input type="number" name="skaicius2" value="0" readonly />
    <button type="submit">Submit</button>
</form>

<h1>Antimtis</h1>

<form method="POST">
    <input type="text" name="skaicius3" value="0" />
    <input type="text" name="skaicius4" value="0" />
    <button type="submit">Submit</button>
</form>

<h1>Daugyba</h1>

<form method="POST">
    <input type="text" name="skaicius5" value="0" />
    <input type="text" name="skaicius6" value="0" />
    <button type="submit">Submit</button>
</form>

<h1>Dalyba</h1>

<form method="POST">
    <input type="text" name="skaicius7" value="0" />
    <input type="text" name="skaicius8" value="0" />
    <button type="submit">Submit</button>
</form>
-->