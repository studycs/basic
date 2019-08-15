<?php
namespace app\components;

class AssetManager extends \yii\web\AssetManager
{
    /**
     * @var array $bundles
     */
    public $bundles = [
        'yii\web\YiiAsset'=>[
            'js'=>['https://unpkg.zhimg.com/yii2php@1.0.4/dist/js/yii.min.js'],'sourcePath' =>null
        ],
        'yii\web\JqueryAsset'=>[
            'js'=>['https://unpkg.zhimg.com/jquery@3.4.0/dist/jquery.min.js'],'sourcePath'=>null
        ],
        'yii\grid\GridViewAsset'=>[
            'js'=>[],'sourcePath'=>null
        ],
        'yii\captcha\CaptchaAsset'=>[
            'js'=>[],'sourcePath'=>null
        ],
        'yii\widgets\ActiveFormAsset'=>[
            'js' =>[],'sourcePath'=>null
        ],
        'yii\bootstrap\BootstrapAsset'=>[
            'css'=>['https://unpkg.zhimg.com/bootstrap@3.4.1/dist/css/bootstrap.min.css'],'sourcePath'=>null
        ],
        'yii\validators\ValidationAsset'=>[
            'js'=>[],'sourcePath' => null
        ],
        'yii\bootstrap\BootstrapPluginAsset'=>[
            'js'=>['https://unpkg.zhimg.com/bootstrap@3.4.1/dist/js/bootstrap.min.js'],'sourcePath'=>null
        ],
    ];

}