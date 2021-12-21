<?php
//Klasės ir Objektai

//Klasė
class Test {

    //Trys matomumo variantai 
    //public
    //private
    //protected 

    //Savybes | Properties
    private $name;

    //Metodas | Method
    public function setName($name) {
        //$this - yra kreipimasis į funkciją kurioje yra metodas
        $this->name = $name;
    }

    public function getName() {
        //$this->setName();
        return $this->name;
    }

}

//Objektas
$test = new Test();

$test->setName('Vilius');

//echo $test->name;

echo $test->getName();
