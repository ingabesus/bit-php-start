<?php
//Klasės ir Objektai

//Klasė
class Test {

    //Trys matomumo variantai 
    //public
    //private
    //protected 

    //Savybes | Properties
    public $name;
    public $surname;

    //Construct methodas pasileidzia vos tik iniciavus klase
    //__destruct()
    public function __construct($vardas, $pavarde) {
        $this->setName($vardas);
        $this->surname = $pavarde;
    }
 
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
$test = new Test('Adomas', 'Mickevicius');

//$test->setName('Vilius');

//echo $test->name;

echo $test->getName() . '<br />';
echo $test->surname;

echo '<pre>';
print_r($test);
