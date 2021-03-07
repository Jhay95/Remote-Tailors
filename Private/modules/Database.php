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
        /*return $this->conn;*/
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

    /*

     // Prepare statement with query
    public function prepare($sql): bool|mysqli_stmt
    {
        $this->stmt = $this->conn->prepare($sql);
        return $this->stmt;
    }


    // Bind values
    public function bind_val($params): Database
    {
        /*
         Args: $params
                data type: array
         */
    /*
        $types = '';
        $args_ref = [];
        if (isset($params)) {
            foreach ($params as $param => &$arg) {
                $types .= $this->_gettype($params[$param]);
                $args_ref[] = &$arg;
            }
            array_unshift($args_ref, $types);
            call_user_func_array(array($this->stmt, 'bind_param'), $args_ref);
        } else {
            $this->error('Unable to prepare MySQL statement (check your syntax) - ' . $this->conn->error);
        }
        return $this->stmt;
    }


    // Execute the prepared statements
    public function execute_stmt()
        {
            $this->stmt->execute();
            if ($this->stmt->errno) {
                $this->error('Unable to process MySQL query (check your params) - ' . $this->conn->error);
            }
            return $this->stmt;
        }

    //* bind result variables

    public function bind_res()
    {
        $this->stmt->get_result();
        if ($this->stmt->errno) {
            $this->error($this->conn->error);
        }
        return $this->stmt;
    }
    */


    // Get result set as array of objects
    public function result_set(): ?array
    {
        return $this->stmt->fetch_all(MYSQLI_ASSOC);

    }

    // Get single record as object
    public function single_result(): ?array
    {
        return $this->stmt->fetch();
    }

    // Get number of rows affected by query
    public function affected_rows() {
        return $this->stmt->affected_rows;
    }

    // Get last inserted ID
    public function last_insert_id(): int|string
    {
        return $this->conn->insert_id;
    }

    // Output any connection error
    public function error($error)
    {
        if ($this->show_error) {
            exit($error);
        }
    }

    // Get variable type
    private function _gettype($var): string
    {
        if (is_string($var)) return 's';
        if (is_float($var)) return 'd';
        if (is_int($var)) return 'i';
        return 'b';
    }

}

