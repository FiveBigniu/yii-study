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
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'aliases' => [
        '@sheila' => dirname( __DIR__),
        '@assets' => dirname(dirname(__DIR__)).'/assets',
    ],
    'controllerNamespace' => 'sheila\controllers',
//    'layout' => null
    'components' => [
        'assetManager' => [
            'basePath' => '@webroot/web',
            'baseUrl' => '@web/web'
        ]
    ],
    'params' => $params,
];

return $config;