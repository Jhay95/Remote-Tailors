<?php
// Start Session
session_start();

require_once('initialize.php');
require_once("functions.php");

$www = WWW_ROOT;
$auth = 'tailors/index.php';      //use URL to if access is granted
$unauth = 'login.php';              // use URL is access is not granted

// Check for $_POST array if none, destroy session and redirect user to home page
if (!IsSet($_POST))
{
    session_destroy();
    header("Location: $www$unauth");
    exit();
}

// Check if username is empty
if(empty($_POST["email"])){
    echo "Please enter your email address.";
}

// Check if password is empty
if(empty($_POST["password"])){
    echo "Please enter your Password.";
}

// If no username and password set, redirect to login page
if (!IsSet($_POST["email"]) || !IsSet($_POST["password"]))
{
    session_destroy();
    header("Location: $www$unauth");
    exit();
}



// function to validate login details
function login_validate($email,$password): mysqli_result|bool
{
    // Check to see if details exist in database
    if ($_POST["submit-tailor"]) {
        $sql = "SELECT `tailor_id` FROM `tailors` WHERE `tailor_email` = '" . $email . "' and `tailor_password` = '" . $password . "'";
    }
    $conn = db_connect();
    return $conn->query($sql);
}

$email= $_POST["email"];			//get username value submitted by form
$password= $_POST["password"];		    //get password from form

$result = login_validate($email,$password);
print_r($result);

//validate login
if ($result == 1)
{
    $_SESSION["user"]=$email;	//store username into session variable
    header("Location: $www$auth");
    //header("Location: index.php");//then forward to home page
    exit();							//stop PHP script here
}

session_destroy();					//destroy the session
header("Location: $www$unauth");
