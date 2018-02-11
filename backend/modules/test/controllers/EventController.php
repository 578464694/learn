<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 17:48
 */
namespace backend\modules\test\controllers;

use backend\behaviors\MyBehavior;
use backend\components\BadGuy;
use backend\components\Coal;
use backend\components\Government;
use backend\components\MyClass;
use backend\events\OffDuty;
use backend\modules\test\models\Worker;
use yii\web\Controller;

class EventController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $coal = new Coal();
        $government = new Government();
        $bad = new BadGuy();

        $coal->on(Coal::EVENT_DISASTER, [$government, 'onDisaster']);
        // 有限处理事件
        $coal->on(Coal::EVENT_DISASTER, [$bad, 'onDisaster'], null, false);
        // 解除事件
        //        $coal->off(Coal::EVENT_DISASTER,[$bad, 'onDisaster']);
//        $coal->off(Coal::EVENT_DISASTER);
        // 触发事件
        $coal->trigger(Coal::EVENT_DISASTER);
        return $this->render('index');
    }

    /**
     * 事件触发顺序，先触发实例级别的事件，在触发类级别的事件
     */
    public function actionWorker()
    {
        OffDuty::on(Worker::className(), Worker::EVENT_OFF_DUTY, function ($event) {
            echo "下班了{$event->sender}";
        });

//        $work = new Worker();
//        $work->on(Worker::EVENT_OFF_DUTY, [$work, 'xiaban']);
//        $work->trigger(Worker::EVENT_OFF_DUTY);
        OffDuty::trigger(Worker::className(),Worker::EVENT_OFF_DUTY);
    }

    public function actionBehavior()
    {
        $myClass = new MyClass();
        $myBehavior = new MyBehavior();
        $myClass->attachBehavior('myBehavior', $myBehavior);
        echo $myClass->property1;
        echo $myClass->method1();
    }
}

















