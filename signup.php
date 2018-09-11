<?php
  //Local variables
$host="localhost";
$username="venusc46_774hw1";
$password="user1";
$dbname="venusc46_DS744HW1";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//finding database
$query = $conn -> query("SELECT * FROM user");
  //update
  if(isset($_POST['Update'])){
    $user=$_POST['user'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email']
    $password=$_POST['password']
    $sql ="UPDATE OFFICES set user='$user', fname='$fname', lname= '$lname', email='$email',password='$password' WHERE user='$user';";

    if($conn->query($sql)){
    echo "Success!";
    }else {
    "Error updating record " . $conn->error;
    }
  }

  $conn->close();
?>
