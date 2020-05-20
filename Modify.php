<?php
include 'ConnectionDatabase.php';
$userID = $_POST["userID"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$userName = $_POST["userName"];
$userPassword = $_POST["userPassword"];

$sql = "UPDATE student SET FirstName='$firstName', LastName='$lastName', Age=$age, Gender='$gender', Course='$course', UserName='$userName', UserPassword='$userPassword' WHERE UserID=$userID";

if (mysqli_query($connect, $sql)) {
    echo "ModifyPage.php";
} else {
    echo "ERROR SQL: $sql" . mysqli_error($connect);
}

mysqli_error($connect);
?>