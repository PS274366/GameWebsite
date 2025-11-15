<?php

namespace App\Service;

use Medoo\Medoo;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ ."../../");
$dotenv->load();

class DatabaseService
{
    private Medoo $connection;

    public function __construct(Medoo $connection)
    {
        $this->connection = new Medoo([
            "type" => "mysql",
            "host" => $_ENV["DB_IP"],
            "database" => $_ENV["DB_NAME"],
            "username" => $_ENV["DB_USER"],
            "password" => $_ENV["DB_PASSWORD"],
            "charset" => "utf8mb4", 
        ]);

        try {
            $this->connection->get("SELECT 1+1");
        } catch (\Exception $e) {
            throw new \Exception("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): Medoo
    {
        return $this->connection;
    }
}