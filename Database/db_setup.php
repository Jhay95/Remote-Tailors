<?php
require_once('db_credential.php');

// Create connection - OOP Programming
$conn = new mysqli(servername, username, password);


if (isset($conn)) {
    if (!$conn) {
        echo 'Could not connect to Database: '. $conn->error ;
    } else {
        echo "Database Connected" ;
    }
}

// sql to create Database
$sql = <<<SQL
CREATE DATABASE remote_tailor;
SQL;

$db = $conn->query($sql);

// Create connection to Database
$conn = new mysqli(servername, username, password,dbname);

$sql = <<<SQL
CREATE TABLE IF NOT EXISTS  tailors (
tailor_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tailor_fname VARCHAR(128) NOT NULL,
tailor_lname VARCHAR(128) NOT NULL,
tailor_email VARCHAR(64) NOT NULL UNIQUE ,
tailor_gender SET('Male', 'Female', 'Undefined') ,
tailor_style SET('Causal', 'Native', 'English') ,
tailor_phone VARCHAR(16) ,
tailor_address VARCHAR(128) ,
tailor_city VARCHAR(64) ,
tailor_pref SET('Male', 'Female') ,
tailor_username VARCHAR(32) NOT NULL UNIQUE ,
tailor_password VARCHAR(16) NOT NULL ,
tailor_reg_date DATETIME DEFAULT NOW()
)
SQL;

if ($conn->query($sql) === TRUE) {
    echo "Tailors table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();