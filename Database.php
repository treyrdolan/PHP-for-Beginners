<?php
class Database {
    public $connection;
    public $statement;
    // Constructor code if needed
    public function __construct($config, $username = 'root', $password = '') {

        $dsn = 'mysql:' . http_build_query($config, '', ';' ); // example.com?mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4
        
        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query, $params = []) {
        
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;

    }

    public function get() {
        // statement->fetchAll()
        return $this->statement->fetchAll();
    }

    public function find() {
        // statement->fetch()
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
