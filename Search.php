<?php
include 'ConnectionDatabase.php';
$searchFunction = $_POST["searchFunction"];

if ($searchFunction == "searchByName") {
  $fullName = explode(" ", $_POST["fullName"]);
  $firstName = $fullName[0];
  $lastName = $fullName[1];
  $sql = "SELECT * FROM student where FirstName='$firstName' and LastName='$lastName'";
  $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $getData = new \stdClass();
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><th scope='row'>" . $row["UserID"] ."</th><td>". $row["FirstName"] ."</td><td>". $row["LastName"] ."</td><td>". $row["Age"] ."</td><td>". $row["Gender"] ."</td><td>". $row["Course"] ."</td></tr>";
      }
    } else {
      echo "ERROR SQL: Can't Find Any USER"; 
      mysqli_error($connect);
  }
  } else if ($searchFunction == "searchByNameToUpdate") {
// Search Data to Update (Returns Value)
$fullName = explode(" ", $_POST["fullName"]);
$firstName = $fullName[0];
$lastName = $fullName[1];

$sql = "SELECT * FROM student where FirstName='$firstName' and LastName='$lastName'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $getData = new \stdClass();
    while ($row = mysqli_fetch_assoc($result)) {
        $getData -> UserID = $row["UserID"];
        $getData -> FirstName = $row["FirstName"];
        $getData -> LastName = $row["LastName"];
        $getData -> Age = $row["Age"];
        $getData -> Gender = $row["Gender"];
        $getData -> Course = $row["Course"];
        $getData -> UserName = $row["UserName"];
        $getData -> UserPassword = $row["UserPassword"];
    }
    $myJson = json_encode($getData);
    echo $myJson;
} else {
    echo "error $sql" . mysqli_error($connect);
}
  } else {
    $sql = "SELECT UserID, FirstName, LastName, Age, Gender, Course FROM student";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><th scope='row'>" . $row["UserID"] ."</th><td>". $row["FirstName"] ."</td><td>". $row["LastName"] ."</td><td>". $row["Age"] ."</td><td>". $row["Gender"] ."</td><td>". $row["Course"] ."</td></tr>";
        }
    } else {
      echo "ERROR SQL: Can't Find Any USER"; 
      mysqli_error($connect);
    }
}
?>