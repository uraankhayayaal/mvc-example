<?php

namespace components;

class Module
{
	private $moduleNamespace;
	private $defaultRoute = 'FrontController';
	private $action = 'index';

	public function __construct($moduleNamespace, $action)
    {
        $this->moduleNamespace = $moduleNamespace;
        $this->action = $action;
    }
	
	public function run()
	{
		$classNme = $this->moduleNamespace . '\\controllers\\' . $this->defaultRoute;
		$controller = new $classNme($this->moduleNamespace, $this->action);
		$controller->beforeAction();
		$controller->run();
		$controller->afterAction();
	}
}