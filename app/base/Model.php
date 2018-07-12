<?php

namespace App\base;

use PDO;

class Model
{
    protected static $db;

    public function __construct()
    {
        if(!isset(self::$db))
        { $dsn = "mysql:host=localhost;dbname=myblog;charset=utf8";
            $opt = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,//PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT         => true//постоянное соединение, кешируется
            );
            self::$db = new PDO($dsn, 'root', '', $opt);
        }
    }

    protected static function getClassName($obj)
    {
        return (new \ReflectionClass($obj))->getShortName();
    }

    /**
     * Get all rows
     * @return \PDOStatement
     */
    public static function all()
    {
        $model = new static;
        $table = $model->table;
        $stmt = self::$db->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt;
    }
}