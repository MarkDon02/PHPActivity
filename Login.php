<?php
include 'ConnectionDatabase.php';
$userName = $_GET["userName"];
$userPass = $_GET["userPass"];

$sql = "SELECT * FROM users WHERE userName='$userName' AND userPass='$userPass'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  // header('Location:./RegistrationPage.php');

} else {
  echo "0 results";
}

mysqli_close($connect);
