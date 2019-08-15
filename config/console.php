<?php
$params = require __DIR__ . '/params.php';

$config = [
    'id' => 'basic-console',
    'basePath' => __DIR__.'/../src',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@root'   =>  dirname(__DIR__),
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@runtime'=> '@root/runtime'
    ],
    'components' => [
        'cache' => ['class' => \yii\caching\FileCache::class],
        'log' => ['class'=>\app\components\Dispatcher::class],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
