<?php

spl_autoload_register(function () {
    include './classes/index.php';
});

class Extern extends Index {

    public function atspausdinimas() { //override

        echo 'Ant PHP Eglutes';

    }

}

$extern = new extern();
//$extern->atspausdinimas();
$extern->atspausdinimas();