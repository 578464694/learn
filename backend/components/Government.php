<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 17:49
 */
namespace backend\components;

use yii\base\Component;

/**
 * Class Government 政府
 * @package backend\components
 */
class Government extends Component
{
    public function onDisaster($event)
    {
        echo "来自{$event->sender} 的灾难";
    }
}