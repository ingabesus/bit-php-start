<?php

class Child extends TopLevel {

    public $test  = 'Test';
    public $test1 = 'Test1';

    public function __construct() {
        parent::__construct($this->test, $this->test1);

        $this->property1 = 'Replaced';
    }

}