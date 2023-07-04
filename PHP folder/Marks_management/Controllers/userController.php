<?php

require 'Modal/userModal.php';

class userController
{
    public $modal;

    public function __construct()
    {
        $this->modal = new userModal();
    }
    public function viewFrontPage(){
        require 'Views/frontpage.php';
    }
    public function create($values){
        var_dump($values);
        $this->modal->insert($values);
    }

}