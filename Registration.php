<?php
include 'ConnectionDatabase.php';

$Firstname = $_POST["FirstName"];
$Lastname = $_POST["LastName"];
$Age = $_POST["Age"];
$Gender = $_POST["Gender"];
$Course = $_POST["Course"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];




$sql = "INSERT INTO `student`(FirstName, LastName, Age, Gender, Course, UserName, Password) VALUES ('$Firstname' , '$Lastname', '$Age', '$Gender', '$Course', '$Username', '$Password')"
if (mysqli_query($connect, $sql)) {
  echo "New record created successfully";
}
mysqli_close($connect);
?>

