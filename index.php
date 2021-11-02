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
