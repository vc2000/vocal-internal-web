<?php
  //Local variables
$host="localhost";
$username="venusc46_774hw1";
$password="user1";
$dbname="venusc46_DS744HW1";
//Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//finding database
$query = $conn -> query("SELECT * FROM user");
  //update
  if(isset($_POST['Update'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone_num=$_POST['phone_num'];
    $job_title=$_POST['job_title'];
    $sql ="UPDATE user set fname='$fname', lname='$lname', phone_num='$phone_num',email='$email',job_title='$job_title' WHERE id='$id';";
    
    if($conn->query($sql)){
    header("Location:contact_info.php");
    }else {
    "Error updating record " . $conn->error;
    }
  }
  
  $conn->close();
?>





