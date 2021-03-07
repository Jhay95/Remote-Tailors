<!--
https://www.onlineittuts.com/login-form-in-php-with-session-and-mysql.html
This script receives a post request from the login form and carries out the following
1. checks that the form fields are not empty
2. checks that the form entries are valid with the database record
3. redirect valid login to dashboard
-->

<?php
require_once('config.php');

session_start(); // Start Session

$auth = WWW_ROOT . "tailors/index.php";    // use URL if access is granted
$unauth = WWW_ROOT . "login.php";          // use URL if access is not granted

if (isset($_POST)) {                        // Check if there was is a post request
    // If no username and password set, redirect to login page
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        header("Location: $unauth?Empty=Please fill in the blank fields!!");
        exit();
    } else {                //validate login with database record
        $result = check_user($_POST["email"], $_POST["password"]);
        if ($result->fetch_assoc()) {               // if a value is returned from the function login_validate
            $_SESSION["user"] = $_POST["email"];    //store email into session variable
            header("Location: $auth");       //then forward to home page
            exit();							        //stop PHP script here
        } else {                                    // If login details are incorrect
            header("Location: $unauth?Invalid=Please enter correct login details!!");
        }
    }
}
