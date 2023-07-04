<?php
require 'Controllers/userController.php';
class Router{
    public $controller;
    public $routerDetails = [];

    public function __construct()
    {
        $this->controller = new userController();
    }

    public function get($uri,$action){
        $this->routerDetails[]=[
            'uri' => $uri,
            'action' =>$action,
            'method' => 'GET'
        ];
    }

    public function post($uri,$action){
        $this->routerDetails[]=[
            'uri' => $uri,
            'action' =>$action,
            'method' => 'POST'
        ];
    }

    public function checkRouterConnection($serverUri,$serverMethod){
        foreach ($this->routerDetails as $routerDetail){
            if($routerDetail['uri'] === $serverUri && $routerDetail['method'] === $serverMethod){
                $action = $routerDetail['action'];
//                var_dump($action);
                switch ($action){
                    case "frontPage":
                        $this->controller->viewFrontPage();
                        break;
                    case "insert":
                        $this->controller->create($_POST);
                        break;
                }
            }
        }
    }
}