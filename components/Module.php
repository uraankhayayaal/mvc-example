<?php

namespace components;

class Module
{
	public $module = 'app';
	public $controller = 'front';
	public $action = 'index';

	public function __construct($module,$controller,$action)
    {
        $this->module = $module;
        $this->controller = $controller;
        $this->action = $action;
    }
	
	public function run()
	{
		$moduleClassName = 'modules\\' . $this->module;
		$classNme = $moduleClassName . '\\controllers\\' . ucfirst($this->controller) . "Controller";
		$controller = new $classNme($moduleClassName, $this->action);
		$controller->beforeAction();
		$controller->run();
		$controller->afterAction();
	}
}