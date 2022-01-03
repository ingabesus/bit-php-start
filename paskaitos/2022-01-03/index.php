<?php

require __DIR__ . '/vendor/autoload.php';

$connection = new PDO("mysql:host=localhost;dbname=blogas", 'root', '');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbConn = new Simplon\Mysql\Mysql($connection);