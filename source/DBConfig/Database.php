<?php declare(strict_types=1);

namespace Backend\DBConfig;

use PDO;
use PDOException;

require_once __DIR__ . '/../vendor/autoload.php';

final class Database
{
    /** @var string  */
    private $host = 'mysql';
    /** @var string  */
    private $databaseName = 'forum';
    /** @var string  */
    private $databaseUsername = 'root';
    /** @var string  */
    private $databasePassword = 'root';
    /** @var PDO */
    private $pdo;

    public function getPDO(): PDO
    {
        $this->pdo = null;
        if (!$this->pdo) {


            try {

                $this->pdo = new PDO('"mysql:host=' . $this->host . ';dbname=' . $this->databaseName . '","'
                    . $this->databaseUsername . '","'
                    . $this->databasePassword . '"');

            } catch (PDOException $exception) {
                throw new PDOException('Error: Could not connect to database.');
            }
        }

        return $this->pdo;
    }

}