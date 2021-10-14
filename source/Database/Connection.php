<?php declare(strict_types=1);

namespace Database\Connection;

class Connection
{

    public static function hello(): void
    {
        echo 'hello xD';
    }

    public static function getPdo(): PDO
    {
        $host = 'localhost';
        $databaseName = 'user';
        $databaseUsername = 'root';
        $databasePassword = '';
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $databaseName . '',
            '' . $databaseUsername . '',
            '' . $databasePassword . '');

        return $pdo;
    }
}