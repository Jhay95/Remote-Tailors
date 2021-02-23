<?php
require_once('functions.php');

// Connect to Database
$conn = db_connect();

// Set a query
$sql = <<<SQL
SELECT * FROM tailors;
SQL;

// Test tailor table
$res = get_tailor();
while ($row = $res->fetch_assoc()) {
    echo "<h6>" . $row["tailor_fname"] . " " . $row["tailor_lname"] . "</h6>" . "<br>";
}


