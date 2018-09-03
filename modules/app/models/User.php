<?php

namespace modules\app\models;

class User
{
	public $id = 'admin';
	public $username = 'admin';
	public $password = 'adminpwd';
	static $_model;

	public function find()
	{
		return self::$_model = new User();
	}

	public function one()
	{
		return self::$_model;
	}

	public function all()
	{
		$users = [];
		for ($i=0; $i < 10; $i++) { 
			$users[] = new User();
		}
		return $users;
	}

	public function save()
	{
		return true;
	}
}