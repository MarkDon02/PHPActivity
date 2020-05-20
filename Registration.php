<?php
include 'ConnectionDatabase.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$userName = $_POST["userName"];
$passWord = $_POST["passWord"];




$sql = "INSERT INTO `student`(FirstName, LastName, Age, Gender, Course, UserName, UserPassword) VALUES ('$firstName' , '$lastName', '$age', '$gender', '$course', '$userName', '$passWord')";
if(mysqli_query($connect, $sql)){
echo "RegistrationPage.php";
}
else{
  echo"error $sql" . mysqli_error($connect);
}
mysqli_close($connect);
?>