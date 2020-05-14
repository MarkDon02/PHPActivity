<?php
include 'ConnectionDatabase.php';
$userName = $_POST["Username"];
$userPass = $_POST["Password"];

$sql = "SELECT * FROM users WHERE userName='$userName' AND userPass='$userPass'";
echo $sql;
 $result = mysqli_query($connect, $sql);

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["UID"]. " - User Role: " . $row["userRole"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  
   
  mysqli_close($connect);
?>