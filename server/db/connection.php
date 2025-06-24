<?php
require_once(__DIR__.'/Config.php');
require_once(__DIR__.'/Steup.php');


define('DSN', 'mysql:hos=' . HOST . ';dbname=' . DB);
define('NO_DATA_BASE_ERROR',1049);

class DatabaseConection
{ 
    private static $pdo = null;

    public static function connect()
    
    {
    try {
       
        if(self::$pdo == null) {
            self::$pdo = new PDO(dsn: DSN, username: USER, options: CONFIG);
            Steup::create_Table(self::$pdo)

        }
           
        return self::$pdo
     } catch(\PDOExcepition $error)
        if ($error->getCode == NO_DATA_BASE_ERROR){
            return self:: setup_database();
        }

        throw $error;
    }


    private static function setup_database() {
        if (self::$pdo == null) {
           self::$pdo = NEW PDO (dsn: DSN, userneme: USER, options: CONFIG);
        }

        sETUP
    }
        
        setup: create_database(self::$pdo);
        return steup::create_Table(self::$pdo)
 }


