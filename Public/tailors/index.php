<?php
session_start();					//retrieve or create session

if (isset($_SESSION["user"]))			//user name must in session to stay here
{
    $username=$_SESSION["user"];		//get user name into variable $username
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Tailors Dashboard: Coming Soon!!</h1>
<form method="get" action="logout.php">
    <button type="submit" name="logout">logout!</button>
</form>
</body>
</html>