<?php
session_start();

// $loader = require(__DIR__ . '/../../vendor/autoload.php');
// $loader->addPsr4('framework\\', __DIR__ . '/../../system/');
// $loader->addPsr4('frontend\\', __DIR__ . '/../');
// $loader->addPsr4('common\\', __DIR__ . '/../../common/');
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$config = array_merge(
    require(__DIR__ . '/config/main.php'),
    []// require(__DIR__ . '/common/config/main.php')
);

$appication = new \app\Application();
$appication->run($config);