<?php

//Atskirame faile vyksta registras
spl_autoload_register(function () {
    include './classes/index.php';
    include './classes/helper.php';
});

class Extern extends Index {

    public function atspausdinimas() { //override

        echo 'Ant PHP Eglutes';

    }

}

$helper = new Helper();

echo $helper::ADDRESS . '<br />' ;

$extern = new extern();
//$extern->atspausdinimas();
$extern->atspausdinimas();