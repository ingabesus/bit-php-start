<?php

$objektas = new stdClass;
//$objektas = (object)[];

// $masyvas = [];
// $masyvas = array('1234', 1234);

// $objektas->test = 1234;
// $objektas->test1 = false;
// $objektas->test2 = 'Test';

//echo $objektas->test;

for($i = 0; $i < 30; $i++) {
    
    $calc = ($i + 50);

    $objektas->$i = rand(5, 25);
    //$objektas->$calc = [1,2,3];

}

 echo '<pre>';
 print_r($objektas);

 echo $objektas->{1};