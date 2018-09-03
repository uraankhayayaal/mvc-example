<?php

namespace components;

class Controller
{
	private $moduleNamespace;
	private $action = 'index';
	private $view;
	private $layout = 'themes\classic\layouts\main';

	public function __construct($moduleNamespace, $action)
    {
    	$this->moduleNamespace = $moduleNamespace;
        $this->action = $action;
		$controllerName = strtolower(substr(basename(get_class($this)), 0, -10));
        $this->view = new \components\View($controllerName, $this->moduleNamespace, $this->layout);
    }

	public function beforeAction()
	{

	}

	public function run()
	{
		$this->{$this->action}();
	}

	public function afterAction()
	{
		
	}

	protected function render($view, $data)
	{
		return $this->view->show($view, $data);
	}
}