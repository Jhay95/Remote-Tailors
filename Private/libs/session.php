<?php

session_start();

function loggedin(): bool
{
    if (isset($_SESSION['id'])) {
        return true;
    } else {
        return false;
    }
}
