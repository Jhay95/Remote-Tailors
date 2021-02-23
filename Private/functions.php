<?php
require_once('db_credential.php');

// Database connections
function db_connect(): mysqli
{
    $conn = new mysqli(servername, username, password, dbname);
    if (isset($conn)) {
        if ($conn -> connect_errno) {
            echo "Failed to connect to Database: " . $mysqli -> connect_error;
            exit();
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

// get tailor table but only tailors that sow for men
function get_men(): mysqli_result|bool
{
    $sql = <<<SQL
    SELECT * FROM tailors WHERE `tailor_pref`='Male';
    SQL;
    $conn = db_connect();
    return $conn->query($sql);
}

// get tailor table but only tailors that sow for women
function get_women(): mysqli_result|bool
{
    $sql = <<<SQL
    SELECT * FROM tailors WHERE `tailor_pref`='Female';
    SQL;
    $conn = db_connect();
    return $conn->query($sql);
}

// Validate login
function check_user($par1=null,$par2=null): mysqli_result|bool
{
    // Check to see if details exist in database
    if ($_POST["submit-tailor"]) {
        $sql = "SELECT `tailor_id` FROM `tailors` WHERE `tailor_email` = '" . $par1 . "' and `tailor_password` = '" . $par2 . "'";
    } /*else {
        $sql = "SELECT `tailor_id` FROM `customer` WHERE `tailor_email` = '" . $email . "' and `tailor_password` = '" . $password . "'";
    }*/
    $conn = db_connect();
    return $conn->query($sql);
}

