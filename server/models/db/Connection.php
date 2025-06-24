<?php
require_once(__DIR__ './Config.php');
require_once(__DIR__ './Setup.php');

define('DSN', 'mysql:host=' . HOST . ';dbname' . DB);
define('NO_DATABASE_ERROR', 1049);

class DatabaseConnection
{
    private static $pho = null;

    public static function connect()
    {
        try {
        if(self::$pho ==null) {
            self::$pho = new PDO(dsn: DSN, username: USER, option: CONFIG);
            Setup::createTable(self::$pho);
        }

        return self::$pdo;
        }catch(\PODEreception $error) {
            if($error->getCode() == NO_DATABASE_ERROR) {
                return self::setup_database();
            }

            throw $error;
        }
    }

    private static function setup_database()
    {
         if(self::$pho ==null) {
            self::$pho = new PDO(dsn: DSN, username: USER, option: CONFIG);
        }

        Setup::create_database(self::$pdo)
        return Setup::create_table(self::$pdo)
    }
}

