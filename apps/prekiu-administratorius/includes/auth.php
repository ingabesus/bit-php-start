<?php

require(BASE_DIR . '/includes/sessions.php');

$auth = [
    'login' => 'admin@php.lt',
    'password' => 'labas1234'
];

$logged_in = false;

print_r($_POST);

if( is_param_equal($_POST, 'login', 1) ) {
    
    echo '<h2>Bandome prisijungti</h2>';

    if( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

        echo '<h2>El. pasto adresas yra</h2>';

        if( $_POST['email'] == $auth['login'] ) {

            echo '<h2>El. pastas yra teisingas</h2>';

            if( isset($_POST['password']) AND md5($_POST['password']) == md5($auth['password']) ) {

                $_SESSION['logged_in'] = true;
                $_SESSION['user'] = $auth['login'];

            }

        }

    }

}

if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in']) {

    $logged_in = true;

}

// if(is_param_equal($_POST, 'login', $auth['login'])) {

//     filter_var($_POST['login'], FILTER_VALIDATE_EMAIL); // true arba false
    
//     if(md5($_GET['password']) == md5($auth['password'])) {

//         $_SESSION['logged_in'] = true;
//         $_SESSION['user'] = $auth['login'];

//     }

// }

// unset($_SESSION['logged_in']);
// if(isset($_SESSION['logged_in'])) {
//     echo 'Logged In';
// }