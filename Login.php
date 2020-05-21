<?php
include 'ConnectionDatabase.php';
session_start();


$userName = $_POST["userName"];
$userPass = $_POST["userPass"];

$sql = "SELECT * FROM users WHERE userName='$userName' AND userPass='$userPass'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  $_SESSION["Authorize"] = "Yes";
  // output data of each row
  // header('Location:./RegistrationPage.php');
  echo "HomePage.php";
} else {
  echo "LoginPage.php";
}

mysqli_close($connect);
?>