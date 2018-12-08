<?php
namespace app\components;

class Connection extends \yii\db\Connection
{
    /**
     * @var string $dsn
     */
    public $dsn = 'mysql:host=localhost;dbname=yii2basic';
    /**
     * @var string $username
     */
    public $username = 'root';
    /**
     * @var string $password
     */
    public $password = '';
    /**
     * @var string $charset
     */
    public $charset = 'utf8mb4';
    /**
     * @var bool $enableSchemaCache
     */
    public $enableSchemaCache = true;
    /**
     * @var int $schemaCacheDuration
     */
    public $schemaCacheDuration = 60;
    /**
     * @var string $schemaCache
     */
    public $schemaCache = 'cache';

}