<?php
class db
{
    private $host = "localhost:33065";
    private $dbname = "crud-php-mvc-pdo";
    private $user = "root";
    private $password = "";

    public function conexion()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
