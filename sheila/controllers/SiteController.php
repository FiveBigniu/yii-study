<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/11
 * Time: 21:43
 */

namespace sheila\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex (){
        $data = [
            'name' => 'zhangsan'
        ];
        return $this -> render('index', $data);
    }
}