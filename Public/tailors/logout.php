<?php
session_start();					//retrieve or create session
if (isset($_GET['logout'])) {
    session_destroy();                //then destroy it
    header("Location: ../login.php?Logout=You are logged out!!");
}



