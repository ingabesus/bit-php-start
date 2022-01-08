<?php

namespace Controllers;

use Crud\InitDb;

class MainController {

    private $router;

    private $db;

    public function __construct() {

        $this->db = new InitDb();

        $this->router = new \AltoRouter();
        
///<<<<<<< HEAD
        $this->router->setBasePath('/Pamokos/BIT/bit/bit/bit-php-start/paskaitos/2022-01-04');
//=======
        //adresa pasikeisti pagal savo direktorija
        $this->router->setBasePath('/pirmojiaplikacija/bit-php-start/paskaitos/2022-01-04');
//>>>>>>> 2fffbc93a9ba65689ded70fca7542794f733d67b

        $this->router->map('GET', '/', function() {
            $kintamasis = $this->returnTest();
            $pagetitle  = 'Titulinis';
            require __DIR__ . '/../views/home.php';
        });
        
        $this->router->map('GET', '/list', function() {
            $pagetitle  = 'Sąrašas';
            $this->db->addData();
            require __DIR__ . '/../views/list.php';
        });

        $this->router->map('POST', '/', function() {
            //print_r($_POST);
            $kintamasis = $this->returnTest();
            require __DIR__ . '/../views/home.php';
        });

        $this->router->map( 'GET', '/list/[i:id]/', function( $id ) {
            require __DIR__ . '/../views/list-edit.php';
        });
        
        $match = $this->router->match();
        if( is_array($match) && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] ); 
        } else {
            // no route was matched
            //header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }

    }

    private function returnTest() {
        return 'TEST';
    }

}