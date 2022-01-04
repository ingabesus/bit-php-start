<?php

namespace Controllers;

use Crud\InitDb;

class MainController {

    private $router;

    private $db;

    public function __construct() {

        $this->db = new InitDb();

        $this->router = new \AltoRouter();
        
        $this->router->setBasePath('/pirmojiaplikacija/bit-php-start/paskaitos/2022-01-04');

        $this->router->map('GET', '/', function() {
            require __DIR__ . '/../views/home.php';
        });
        
        $this->router->map('GET', '/list', function() {
            $this->db->addData();
            require __DIR__ . '/../views/list.php';
        });
        
        $match = $this->router->match();
        
        if( is_array($match) && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] ); 
        } else {
            // no route was matched
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }

    }

}