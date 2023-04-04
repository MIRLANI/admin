<?php

session_start();

if (isset($_SESSION) == true){
    session_unset();
    session_destroy();
    header("location:login.php");
    exit;
}

