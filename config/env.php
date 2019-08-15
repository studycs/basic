<?php
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

define('YII_ENV',$_ENV['YII_ENV']);
define('YII_DEBUG',$_ENV['YII_DEBUG']==='true');

define('DB_DSN',$_ENV['DB_DSN']);
define('DB_DATABASE',$_ENV['DB_DATABASE']);
define('DB_USERNAME',$_ENV['DB_USERNAME']);
define('DB_PASSWORD',$_ENV['DB_PASSWORD']);
define('ADMIN_EMAIL',$_ENV['ADMIN_EMAIL']);