<?php

namespace Crud;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\QueryBuilder\CreateQueryBuilder;
use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;

class InitDb {

    protected $_mysql;

    public function __construct() {

        $this->connect();

    }

    private function connect() {

        $connection = new \PDO("mysql:host=localhost;dbname=blogas", 'root', '');

        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->_mysql = new Mysql($connection);

    }

    public function addData() {

        $store = new NameStore($this->_mysql);

        $model = $store->create(
            (new CreateQueryBuilder())->setModel(
                (new NameModel())
                    ->setName('Kunigunda')
                    ->setAge(22)
            )
        );

    }

}
