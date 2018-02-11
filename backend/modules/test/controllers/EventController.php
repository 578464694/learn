<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 17:48
 */
namespace backend\modules\test\controllers;

use yii\web\Controller;

class EventController extends Controller
{
    public function actionIndex()
    {
        
        return $this->render('index');
    }
}