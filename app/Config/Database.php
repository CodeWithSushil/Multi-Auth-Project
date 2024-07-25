<?php
declare(strict_types=1);

namespace "App/Config";
use PDO;

class Database {
  private string $host = $_ENV['servername'];
  private string $user = $_env['username'];
  private string $pass = $_ENV['password'];
  private string $dbname = $_ENV['dbname'];
  private string $driver = $_ENV['driver'];
  public object $conn;

  public function __construct() {
    $this->conn = null;
    try {
      $this->conn = new PDO("this->driver:host=this->host;dbname=this->dbname", $this->user, $this->pass);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection Error: ". $e->getMessage();
    }

  }


}
