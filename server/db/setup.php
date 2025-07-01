<?php
require_once(__DIR__ . '/Config.php');

class Setup
{
    public static function create_Database($pdo) 
    {
        $sql = "CREATEDATABASE IF NOT EXISTS " .DB;
        $pdo->exec($pdo);
    }

    public static function create_Table($pdo) 
    {
        $sql = "CREATE DATABASE IF NOT EXISTS tasks (
            id INT AUTO-INCREMENT PRIMARY KEY,
            descripition VARCHAR(500) NOT NULL,
            done BOOLEAN NOT NULL DEFAULT 0
        )";
        $pdo->exec($sql);

        return $pdo;
    }

}
