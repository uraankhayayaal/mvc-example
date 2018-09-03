<?php

namespace modules\app\controllers;

class FrontController extends \components\Controller
{
	public function index()
	{
		$users = \modules\app\models\User::find()->all();
		$user = \modules\app\models\User::find()->one();
		$this->render('index', ['users' => $users, 'one_user' => $user]);
	}
}