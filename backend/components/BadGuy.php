<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 17:52
 */

namespace backend\components;


use yii\base\Component;

/**
 * Class BadGuy 坏人
 * @package backend\components
 */
class BadGuy extends Component
{
    public function onDisaster($event)
    {
        $event->handled = true;
    }
}