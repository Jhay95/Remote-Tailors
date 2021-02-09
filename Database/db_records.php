<?php

require_once('db_credential.php');

// Create connection to Database
$conn = new mysqli(servername, username, password, dbname);


if (isset($conn)) {
    if (!$conn) {
        echo 'Could not connect to Database', $conn->error;
    } else {
        echo "Database Connected";
    }
}
$sql = "INSERT INTO `tailors` (`tailor_id`, `tailor_fname` ,`tailor_lname`, `tailor_email`, `tailor_gender`, `tailor_style`, 
`tailor_phone`, `tailor_address`,`tailor_city`, `tailor_pref`, `tailor_username`, `tailor_password`, `tailor_reg_date`) 
VALUES (NULL,'ken', 'Wood','ken@gmail.com','Male', 'English',0869754326,'Kingsway Palace', 'Belfast', 'Male', 'kennywood','kennykyu6479',CURRENT_TIMESTAMP),
(NULL,'Dennis', 'Woody','deny@gmail.com','Male', 'English',0869754326,'Kingsway Palace', 'Belfast', 'Male,Female', 'deenness','dennel6479',CURRENT_TIMESTAMP)";


if ($conn->query($sql) === TRUE) {
    echo "Insertion into tailors table updated successfully";
} else {
    echo "Error inserting into table: " . $conn->error;
}

$conn->close();