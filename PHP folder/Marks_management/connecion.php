<?php

class dbConnection{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=127.0.0.1;dbname=project_managent',
                'admin',
                'welcome'
            );
//            echo "success";
        }
        catch (Exception $e){
            die($e->getMessage()."connection failed");
        }
    }
}