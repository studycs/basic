<?php


namespace app\components;


class ErrorHandler extends \yii\web\ErrorHandler
{
    public $errorAction = 'site/error';

}