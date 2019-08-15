<?php
$params = require __DIR__ . '/params.php';
$config = [
    'id' => 'basic',
    'language'=>'zh-CN',
    'sourceLanguage'=>'en-US',
    'basePath' => __DIR__.'/../src',
    'bootstrap' => ['log'],
    'aliases' => [
        '@root'   =>  dirname(__DIR__),
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@runtime'=> '@root/runtime'
    ],
    'components'=> [
        'user'=>['class'=>\app\components\User::class],
        'cache'=>['class'=>\yii\caching\FileCache::class],
        'db'=>['class'=>\app\components\Connection::class],
        'log'=>['class'=>\app\components\Dispatcher::class],
        'request'=>['class'=>\app\components\Request::class],
        'urlManager'=>['class'=>\app\components\UrlManager::class],
        'assetManager'=>['class'=>\app\components\AssetManager::class],
        'errorHandler'=>['class'=>\app\components\ErrorHandler::class],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
