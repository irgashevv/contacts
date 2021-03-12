<?php


class Router
{
    public function index()
    {
        if (isset($_GET['model']) && $_GET['model'] === 'contacts') {
            $controller = 'ContactsController';
        }

        if (empty($controller)) {
            die("Controller not found");
        }


        include_once __DIR__ . "/../Controller/" . $controller . ".php";
        if (isset($_GET['action']) && $_GET['action'] === 'create') {
            (new $controller())->create();
        }
        if (isset($_GET['action']) && $_GET['action'] === 'update') {
            (new $controller())->update();
        }
    }
}