<?php

$config = [
	'db' => [
		'host' => 'localhost',
		'server' => 'app',
		'uesrname' => 'app',
		'password' => 'app',
	],
	'rout' => [
		'app' => [
			'class' => 'modules\app\Module'
		],
		'banner' => [
			'class' => 'modules\banner\Module'
		],
		'article' => [
			'class' => 'modules\article\Module'
		],
	],
];

return $config;