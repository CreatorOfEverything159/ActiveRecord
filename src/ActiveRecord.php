<?php

namespace Post;

use Dotenv\Dotenv;
use PDO;

//require_once('../vendor/autoload.php');
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


class ActiveRecord
{
    protected static $connection;

    protected static function connect()
    {
        if (!isset(self::$connection)) {
            self::$connection = new PDO(
                "mysql:host=" . $_ENV['MYSQL_HOST']
                . ";port=" . $_ENV['MYSQL_PORT'] . ";",
                $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']
            );
        }
    }

    protected static function unsetConnect()
    {
        self::$connection = null;
    }
}