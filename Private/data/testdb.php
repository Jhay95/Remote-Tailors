<?php

require_once('../config/config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Error handling
if ($conn->connect_error) {
    if (isset($conn)) {
        die('Failed to connect to MySQL - ' . $conn->connect_error);
    }
} else echo "Connected Successfully";


# First Dummy Tailor Data input
$sql = "INSERT INTO `tailors` (`tailor_id`, `tailor_fname` ,`tailor_lname`, `tailor_email`, `tailor_gender`, `tailor_style`,
`tailor_phone`, `tailor_address`,`tailor_city`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`,`tailor_modify_date`) 
VALUES (NULL,'ken', 'Wood','ken@gmail.com','Male', 'English',0869754326,'Kingsway Palace', 'Belfast', 'Male', 'kennywood','kennykyu6479',CURRENT_TIMESTAMP, NULL),
(NULL,'Dennis', 'Woody','deny@gmail.com','Male', 'English',0869754326,'Kingsway Palace', 'Belfast', 'Male,Female', 'deenness','dennel6479',CURRENT_TIMESTAMP, NULL)";


if ($conn->query($sql) === TRUE) {
    echo "Insertion into tailors table updated successfully";
} else {
    echo "Error inserting into table: " . $conn->error;
}


# Read Tailor data to database from CSV file
$tailor_data = fopen("Tailor Dummy Data.csv", "r");

$i = 0;
while (($data = fgetcsv($tailor_data, 1000)) !== FALSE) {
    if ($i > 0) {
        $import_tailor = "INSERT INTO `tailors` (`tailor_id`, `tailor_fname` ,`tailor_lname`, `tailor_email`, `tailor_gender`, `tailor_style`,
                    `tailor_phone`, `tailor_address`,`tailor_city`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`, `tailor_modify_date`) 
                    VALUES (NULL,'" . $data[0] . "', '" . $data[1] . "','" . $data[2] . "','" . $data[6] . "', '" . $data[10] . "',
                    '" . $data[3] . "','" . $data[4] . "', '" . $data[5] . "', '" . $data[7] . "', '" . $data[8] . "','" . $data[9] . "',CURRENT_TIMESTAMP, NULL)";
        $conn->query($import_tailor);
    }
    $i = 1;
}

fclose($tailor_data);


# Read Customer data to database from CSV file
$cust_data = fopen("Customer dummy data.csv", "r");
while (($data = fgetcsv($cust_data, 1000)) !== FALSE) {
    if ($i > 0) {
        $import_cust = "INSERT INTO `customers` (`customer_id`, `customer_fname` ,`customer_lname`, `customer_email`, `customer_gender`, `customer_phone`,
                       `customer_address`,`customer_city`, `customer_username`, `customer_password`, `customer_reg_date`) 
                    VALUES (NULL,'" . $data[1] . "', '" . $data[2] . "','" . $data[3] . "','" . $data[4] . "', '" . $data[5] . "',
                    '" . $data[6] . "','" . $data[7] . "', '" . $data[8] . "', '" . $data[9] . "',CURRENT_TIMESTAMP)";
        $conn->query($import_cust);
    }
    $i = 1;
}

fclose($cust_data);

$conn->close();