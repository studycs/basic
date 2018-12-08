<?php
namespace app\components;

class AssetManager extends \yii\web\AssetManager
{
    /**
     * @var array $bundles
     */
    public $bundles = [
        'yii\web\YiiAsset'=>[
            'js'=>['js/yii.min.js'],'sourcePath' =>null
        ],
        'yii\web\JqueryAsset'=>[
            'js'=>['https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js'],'sourcePath'=>null
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
            'css'=>['https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css'],'sourcePath'=>null
        ],
        'yii\validators\ValidationAsset'=>[
            'js'=>[],'sourcePath' => null
        ],
        'yii\bootstrap\BootstrapPluginAsset'=>[
            'js'=>['https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js'],'sourcePath'=>null
        ],
    ];

}