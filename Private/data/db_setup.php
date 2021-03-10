<?php
require_once('../config/config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Error handling
if ($conn->connect_error) {
    if (isset($conn)) {
        die('Failed to connect to MySQL - ' . $conn->connect_error);
    }
} else echo "Connected Successfully";


// Create Table - Tailor
$tsql = <<<SQL
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
tailor_reg_date DATETIME DEFAULT NOW(),
tailor_modify_date DATETIME 
)
SQL;

// Create Table - Customer
$csql = <<<SQL
CREATE TABLE IF NOT EXISTS  customers (
customer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_fname VARCHAR(128) NOT NULL,
customer_lname VARCHAR(128) NOT NULL,
customer_email VARCHAR(64) NOT NULL UNIQUE ,
customer_gender SET('Male', 'Female', 'Undefined') ,
customer_phone VARCHAR(16) ,
customer_address VARCHAR(128) ,
customer_city VARCHAR(64) ,
customer_username VARCHAR(32) NOT NULL UNIQUE ,
customer_password VARCHAR(16) NOT NULL ,
customer_reg_date DATETIME DEFAULT NOW(),
customer_modify_date DATETIME                                    
)
SQL;

if ($conn->query($tsql) === TRUE) {
    printf("Table tailors successfully created.\n");
}

if ($conn->query($csql) === TRUE) {
    printf("Table customers successfully created.\n");
}

$conn->close();

