<?php
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

    $skaiciuotuvas = 0;
    $kondicija = true;

    if($kondicija)
        $skaiciuotuvas++;

    if($kondicija)
        $skaiciuotuvas++;

    if($kondicija)
        $skaiciuotuvas++;

    echo $skaiciuotuvas . '<br />';
    
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






    if(isset($_POST['skaicius1']) && isset($_POST['skaicius2']))
        echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius1'] + $_POST['skaicius2']);


    if(isset($_POST['skaicius3']) && isset($_POST['skaicius4']))
        echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius3'] - $_POST['skaicius4']);


    if(isset($_POST['skaicius5']) && isset($_POST['skaicius6']))
        echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius5'] * $_POST['skaicius6']);


    if(isset($_POST['skaicius7']) && isset($_POST['skaicius8']))
        echo 'Suskaičiuotas skaičius: ' . ($_POST['skaicius7'] / $_POST['skaicius8']);

    //if(isset($_GET['skaicius1']) || isset($_GET['skaicius2']);

?>

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
