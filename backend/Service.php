<?php

class Service {

    private $db;

    function __construct() {
        require './db.php';
        $this->db = new DB();
    }

    public function getService($id) {

        $sql = "SELECT * FROM service WHERE id = ?";
        $result = $db->conn->prepare($sql);
        $result->execute(array($id));

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

    public function getAllServices() {
        $sql = "SELECT * FROM service WHERE 1";
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
