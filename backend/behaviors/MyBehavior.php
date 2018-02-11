<?php
/**
 * Created by PhpStorm.
 * User: wangyu
 * Date: 2018/2/11
 * Time: 19:43
 */
namespace backend\behaviors;

use yii\db\ActiveRecord;

class MyBehavior extends \yii\base\Behavior
{
    public $property1 = 'This is a property of MyBehavior';

    public function method1()
    {
        return 'method in MyBehavior is called';
    }

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate'
        ];
    }

    public function beforeValidate($event)
    {

    }
}