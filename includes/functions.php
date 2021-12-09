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

if( !function_exists('is_param_equal') ) {

    // function is_param_equal($param, $param2) {

    //     if(isset($param) && $param ==  $param2) {
    //         return true;
    //     }

    //     return false;
    // }

    function is_param_equal($param, $param2) {
        
        return (isset($param['login']) && $param['login'] ==  $param2) ? true : false;

    }

}