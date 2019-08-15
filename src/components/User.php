<?php


namespace app\components;


class User extends \yii\web\User
{
    public $identityClass = \app\models\User::class;

    public $enableAutoLogin = true;

}