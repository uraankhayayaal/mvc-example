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
		if(method_exists($this,$this->action))
		{
			$this->{$this->action}();
		}else{
			http_response_code(404);
            include('404.php');
            die();
        }
	}

	public function afterAction()
	{
		
	}

	protected function render($view, $data = null)
	{
		return $this->view->show($view, $data);
	}
}