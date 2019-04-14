<?php
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

define('YII_DEBUG',getenv('YII_DEBUG'));
define('YII_ENV',getenv('YII_ENV'));

define('DB_DSN',getenv('DB_DSN'));
define('DB_DATABASE',getenv('DB_DATABASE'));
define('DB_USERNAME',getenv('DB_USERNAME'));
define('DB_PASSWORD',getenv('DB_PASSWORD'));
define('ADMIN_EMAIL',getenv('ADMIN_EMAIL'));