<?php

class DB {

    public $conn;
    private $dsn = 'mysql:dbname=ewsally;host=127.0.0.1;charset=utf8';
    private $user = 'abdou';
    private $password = '123';

    public function __construct() {
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            
        }
    }
}
