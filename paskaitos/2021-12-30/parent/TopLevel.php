<?php

class TopLevel {

    protected $property1;
    public $property2;

    public function __construct($arg1, $arg2) {

        $this->property1 = $arg1;
        $this->property2 = $arg2;

    }

    public function getSomething() {
        return 'Something';
    }

}

