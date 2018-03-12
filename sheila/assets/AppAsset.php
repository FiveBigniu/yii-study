<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/12
 * Time: 20:49
 */

namespace sheila\assets;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = '';
    public $css = [];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}