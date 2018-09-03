<?php

namespace components;

class View
{
	public $title;
	private $moduleNamespace;
	private $controllerName;
	private $layout = 'themes\classic\layouts\main';
	private $content;

	public function __construct($controllerName, $moduleNamespace, $layout)
    {
        $this->moduleNamespace = $moduleNamespace;
        $this->controllerName = $controllerName;
        $this->layout = $layout;
    }

	public function render($content_view, $data = null)
	{
		$path1 =  $this->moduleNamespace . '\\views\\' . $this->controllerName . '\\';
		$path2 =  'themes\classic\layouts\\';
		$file1 = $path1 . $content_view . '.php';
		$file2 = $path2 . $content_view . '.php';

		if (is_file($file1))
		{
			return $content = $this->get_include_contents($file1,$data);	
		}elseif(is_file($file2)){
			return $content = $this->get_include_contents($file2,$data);	
		}

	}

	public function show($content_view, $data = null)
	{
		$content = $this->get_include_contents($this->moduleNamespace . '\\views\\' . $this->controllerName . '\\' . $content_view . '.php',$data);	
		include $this->layout . '.php';
	}

	protected function get_include_contents($filename,$data)
	{
	    if (is_file($filename)) {
	        ob_start();
	        if(is_array($data)) {
				foreach ($data as $key => $value) {
					${$key} = $value;
				}
			}
	        include($filename);
	        return ob_get_clean();
	    }
	    return false;
	}
}