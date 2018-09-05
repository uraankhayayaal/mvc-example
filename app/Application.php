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
        $module = $_GET["m"] ? $_GET["m"] : 'app';
        $controler = $_GET["c"] ? $_GET["c"] : 'front';
        $action = $_GET["a"] ? $_GET["a"] : 'index';
        if($module != null && isset($this->config['rout'][$module]))
            $module_name = $this->config['rout'][$module];
        else
        {
            http_response_code(404);
            include('404.php');
            die();
        }

        $className = $module_name['class'];
        $moduleClass = new $className($module,$controler,$action);
        $moduleClass->run();
    }
}