<?php

require_once('db_credential.php');

// Create connection to Database
if (isset($servername, $username, $password, $dbname)) {
    $conn = new mysqli($servername, $username, $password, $dbname);
}

if (isset($conn)) {
    if (!$conn) {
        echo 'Could not connect to Database', $conn->error;
    } else {
        echo "Database Connected";
    }
}


$sql = "INSERT INTO `tailors` (`tailor_id`, `tailor_name`, `tailor_email`, `tailor_gender`, `tailor_style`, 
`tailor_phone`, `tailor_location`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`) 
VALUES (NULL,'ken', 'ken@gmail.com','M', 'English',0869754326,'Lagos Nigeria', 'M', 'kennywood','kennykyu6479',NULL)";


if ($conn->query($sql) === TRUE) {
    echo "Insertion into tailors table updated successfully";
} else {
    echo "Error inserting into table: " . $conn->error;
}

$conn->close();