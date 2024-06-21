<?php

class Database
{

    public $connection;

    /**
     * Constructs a new instance of the Database class.
     *
     * @param array $config The configuration parameters for the database connection.
     * @param string $username The username for the database connection. Defaults to 'root'.
     * @param string $password The password for the database connection. Defaults to an empty string.
     * @throws \PDOException If there is an error establishing the database connection.
     * @return void
     */
    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * Executes a SQL query with optional parameters and returns the statement object.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An optional array of parameters to bind to the query.
     * @return PDOStatement The statement object representing the executed query.
     */
    public function query($query, $params = [])
    {

        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
