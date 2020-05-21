<?php
session_start();

if(!isset($_SESSION["Authorize"])){
    header("Location: LoginPage.php");
}

?>