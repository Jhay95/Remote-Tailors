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


// Send Form data to database

//$fname = $_POST["fname"];
//$lname = $_POST["lname"];
//$email = $_POST["email"];
//$uname = $_POST["uname"];
//$pass = $_POST["password"];
//
//function tailor_data() {
//    // get data from tailor's registration form
//}
//
//function visitor_data() {
//    //get data from visitors registration form
//}
//
//function validate_register() {
//    // if submit id == "submit-tailor"
//    tailor_data();
//
//    //else
//    visitor_data();
//}
