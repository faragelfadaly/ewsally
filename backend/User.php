<?php

class User {

    private $db;

    function __construct() {
        require './db.php';
        $this->db = new DB();
    }

    public function getUser($id) {

        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db->conn->prepare($sql);
        $result->execute(array($id));
//        $result = $db->conn->query($sql);

        if ($result) {
            $res = array();
            while ($row = $result->fetch()) {
                $res[] = $row;
            }
            $data['data'] = $res;
        } else {
            $errors[0] = 'error in DB, please try again later';
        }
        
        die(var_dump($data));
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM user WHERE 1";
        $result = $this->db->conn->query($sql);

        if ($result) {
            $res = array();
            while ($row = $result->fetch()) {
                $res[] = $row;
            }
            $data['data'] = $res;
        } else {
            $errors[0] = 'error in DB, please try again later';
        }
        
        die(var_dump($data));
    }

}
