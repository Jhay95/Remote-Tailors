<?php
require_once('db_credential.php');

// Database connections
function db_connect(): mysqli
{
    $conn = new mysqli(servername, username, password, dbname);
    if (isset($conn)) {
        if (!$conn) {
            echo 'Error 503: ' . $conn->error;
        }
    }
    return $conn;
}

// get tailor table
function get_tailor(): mysqli_result|bool
{
    $sql = <<<SQL
    SELECT * FROM tailors;
    SQL;
    $conn = db_connect();
    return $conn->query($sql);
}

function get_men(): mysqli_result|bool
{
    $sql = <<<SQL
    SELECT * FROM tailors WHERE `tailor_pref`='Male';
    SQL;
    $conn = db_connect();
    return $conn->query($sql);
}

function get_women(): mysqli_result|bool
{
    $sql = <<<SQL
    SELECT * FROM tailors WHERE `tailor_pref`='Female';
    SQL;
    $conn = db_connect();
    return $conn->query($sql);
}


