<!--https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database-->
<?php
session_start();
require_once("initialize.php");

$auth = WWW_ROOT . "tailors/index.php";    // use URL if access is granted
$unauth = WWW_ROOT . "register.php";          // use URL if access is not granted
$conn = db_connect();

if (isset($_POST)) {
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['uname']) || empty($_POST['password'])) {
        header("Location: $unauth?Empty=Please fill in the blank fields!!");
        exit();
    } else {
        $sql = "SELECT `tailor_id` FROM `tailors` WHERE `tailor_email` = '" . $_POST['email'] . "'";
        $result = $conn->query($sql);
        if ($result->fetch_assoc()) {
            header("Location: $unauth?Email=Email already exist!!");
        }
        $sql = "SELECT `tailor_id` FROM `tailors` WHERE `tailor_username` = '" . $_POST['uname'] . "'";
        $result1 = $conn->query($sql);
        if ($result1->fetch_assoc()) {
            header("Location: $unauth?Username=Username already exist!!");
        }

        if (!$result->fetch_assoc() || !$result1->fetch_assoc()) {
            $query = "INSERT INTO `tailors` (`tailor_id`, `tailor_fname` ,`tailor_lname`, `tailor_email`,`tailor_username`, `tailor_password`,`tailor_reg_date`) 
                  VALUES (NULL, '" . $_POST["fname"] . "', '" . $_POST["lname"] . "','" . $_POST["email"] . "','" . $_POST["uname"] . "','" . $_POST["password"] . "',CURRENT_TIMESTAMP)";
            if ($conn->query($query) === TRUE) {
                $_SESSION["user"] = $_POST["uname"];
                header("Location: $auth");
                exit();
            } else {
                header("Location: $unauth");
            }
        }
    }

}

