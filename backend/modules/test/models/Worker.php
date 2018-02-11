<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 18:26
 */
namespace backend\modules\test\models;

use yii\base\Component;

class Worker extends Component
{
    const EVENT_OFF_DUTY = 'duty';

    public function xiaban($event)
    {
//        $event->handled = true;
        echo '早下班';
    }
}