<?php


namespace app\components;


class User extends \yii\web\User
{
    public $identityClass = \app\models\entity\User::class;

    public $enableAutoLogin = true;

}