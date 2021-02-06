<?php
require_once('db_credential.php');

// Create connection - OOP Programming
if (isset($servername,$username,$password)) {
    $conn = new mysqli($servername, $username, $password);
}

if (isset($conn)) {
    if (!$conn) {
        echo 'Could not connect to Database', $conn->error;
    } else {
        echo "Database Connected";
    }
}
// sql to create Database
$sql = 'CREATE DATABASE remote_tailor';
$db = $conn->query($sql);

// Create connection to Database
if (isset($servername,$username,$password, $dbname)) {
    $conn = new mysqli($servername, $username, $password,$dbname);
}

$sql = <<<SQL
CREATE TABLE IF NOT EXISTS  tailors (
tailor_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tailor_name VARCHAR(128) NOT NULL,
tailor_email VARCHAR(64) NOT NULL UNIQUE ,
tailor_gender VARCHAR(16) NOT NULL,
tailor_style VARCHAR(64) NOT NULL,
tailor_phone VARCHAR(64) NOT NULL,
tailor_location VARCHAR(250) NOT NULL,
tailor_pref CHAR(2) NOT NULL,
tailor_username VARCHAR(32) NOT NULL UNIQUE ,
tailor_password VARCHAR(250) NOT NULL ,
tailor_reg_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
SQL;

if ($conn->query($sql) === TRUE) {
    echo "</br>";
    echo "Tailors table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();