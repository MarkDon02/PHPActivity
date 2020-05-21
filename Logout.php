<?php
session_start();
unset($_SESSION["Authorize"]);

echo 'You have cleaned session';
header('Location: LoginPage.php');
?>