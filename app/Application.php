<?php

namespace app;

class Application
{
    private $config;
    private $env;

    public function __construct($env = 'dev')
    {
        $this->env = $env;
    }

    public function run($config)
    {
        $this->config = $config;

        $module_name = 'app';
        $route = $_GET["r"] ? $_GET["r"] : 'app';
        $action = $_GET["a"] ? $_GET["a"] : 'index';
        if($route != null && isset($this->config['rout'][$route]))
            $module_name = $this->config['rout'][$route];
        else
        {
            http_response_code(404);
            include('404.php');
            die();
        }

        $className = $module_name['class'];
        $module = new $className('modules\\'.$route,$action);
        $module->run();
    }
}