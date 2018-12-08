<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => ['cookieValidationKey' => 'hOGmEgkIyjIFlZuucFxXjjVnInLwBdVMhdK2qoiGnM'],
        'cache' => ['class' => 'yii\caching\FileCache'],
        'user' => ['identityClass' => 'app\models\User','enableAutoLogin' => true,],
        'errorHandler' => ['errorAction' => 'site/error'],
        'mailer' => ['class' => 'yii\swiftmailer\Mailer','useFileTransport' => true],
        'log' => ['class'=>\app\components\Dispatcher::class],
        'db' => ['class'=>\app\components\Connection::class],
        'assetManager'=>['class'=>\app\components\AssetManager::class],
        'urlManager' => ['class'=>\app\components\UrlManager::class],
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
