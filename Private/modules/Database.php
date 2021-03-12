<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public $conn;
    private $show_error = true;
    private $stmt;
    protected $query_closed = TRUE;

    public function __construct()
    {
        //create DB instance
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        // Error handling
        if ($this->conn->connect_error) {
            die('Failed to connect to MySQL - ' . $this->conn->connect_error);
        }
    }

    public function close(): bool
    {
        return $this->conn->close();
    }

    public function query($sql): mysqli_result|bool
    {
        $this->stmt = $this->conn->query($sql);
        return $this->stmt;
    }

    // Get result set as array of objects
    public function result_set(): ?array
    {
        return $this->stmt->fetch_all(MYSQLI_ASSOC);

    }

    // Get single record as object
    public function single_result(): ?array
    {
        return $this->stmt->fetch_assoc();
    }

    // Get number of rows affected by query
    public function rows_affected() {
        return $this->stmt->affected_rows;
    }
    // Get number of rows returned by query
    public function rows_count() {
        return $this->stmt->num_rows;
    }

    // Get last inserted ID
    public function last_insert_id(): int|string
    {
        return $this->conn->insert_id;
    }

    // Output any connection error
    public function error()
    {
        return $this->stmt->connect_error();
    }

}

