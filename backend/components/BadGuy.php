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
        // 将事件标记为已经处理完毕，阻止后续事件handler介入
        echo 'bad guy';
        $event->handled = true;
    }
}