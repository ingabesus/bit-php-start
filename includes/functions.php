<?php

if( !function_exists('is_array_element') ) {


    //Ar $element atitinka kondicija ar ne
    function is_array_element($element) {

        if( isset($element) AND is_array($element) AND count($element) > 0) {
            return true; // break; cikle
        }

        return false;
    }

    //true arba false

}