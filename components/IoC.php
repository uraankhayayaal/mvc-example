<?php

namespace components;

/**
 * 
 */
class IoC
{
	protected $registry = array();

	function __construct()
	{
		# code...
	}

   	public function __set($name, $resolver)
   	{
      	$this->registry[$name] = $resolver;
   	}
   	public function __get($name)
   	{
      	return $this->registry[$name]();
   	}
}