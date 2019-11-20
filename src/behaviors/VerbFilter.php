<?php
namespace app\behaviors;
/**
 * Class VerbFilter
 * @package app\behaviors
 */
class VerbFilter extends \yii\filters\VerbFilter
{
    public $actions = [
        'logout' => ['post']
    ];
}