<?php
namespace app\behaviors;
/**
 * Class AccessControl
 * @package app\behaviors
 */
class AccessControl extends \yii\filters\AccessControl
{
    public $only = ['logout'];

    public $rules = [
        ['actions' => ['logout'],'allow'=>true,'roles'=>['@']]
    ];
}