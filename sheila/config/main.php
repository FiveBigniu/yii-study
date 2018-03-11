<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/11
 * Time: 21:42
 */
$params = require (__DIR__.'/params.php');
$config = [
    'id' => 'app-sheila',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@sheila' =>dirname( __DIR__),
    ],
    'controllerNamespace' => 'sheila\controllers',
//    'layout' => null
    'params' => $params,
];

return $config;