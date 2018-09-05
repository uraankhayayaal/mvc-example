<?php

// class App
// {
// 	static $var;
	
// 	function __construct()
// 	{
// 		self::$var = 123123;
// 	}

// 	function run()
// 	{
// 		self::$var = 'asd';
// 	}
// }

// $class = new App();
// echo App::$var . "<br>"; //Выводит: 123123

// $class2 = new App();
// $class2->run();
// echo App::$var . "<br>"; //Выводит: asd
// echo $class::$var . "<br>"; //Выводит: asd
// echo $class2::$var . "<br>"; //Выводит: asd

class User
{
	public $username = 'admin';
	static $_model;

	public function find()
	{
		return self::$_model = new User();
	}

	public function one()
	{
		return self::$_model;
	}

	public function changeUsername($username)
	{
		self::$_model->username = $username;
		return self::$_model;
	}
}

$model = User::find()->one();
echo $model->username . "<br>";
echo User::$_model->username . "<br>";

$model2 = User::find()->one()->changeUsername('Demo');
echo $model2->username . "<br>";
echo User::$_model->username . "<br>";
echo $model::$_model->username . "<br>"; // Почему выводит не "Admin"?
