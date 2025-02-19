<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $dbConnection;
    protected $table;

    public function __construct() {
        try {
            $dbConfig = require_once MAIN_APP_ROUTE."database.php";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
    
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $ex) {
            echo "Error > " .$ex -> getMessage();
        
       
    };
}
}