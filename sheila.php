<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/11
 * Time: 21:40
 */
require (__DIR__ . '/vendor/autoload.php');
require (__DIR__ . '/vendor/yiisoft/yii2/yii.php');
$config = require(__DIR__ . '/sheila/config/main.php');
(new yii\web\Application($config)) -> run();