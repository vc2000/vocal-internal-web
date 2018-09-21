<?php
session_start();
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

  $email=($_POST['email']);
  $password=($_POST['password']);

  $sql="SELECT * FROM user WHERE email='$email' And password='$password'";
  echo $result;
  $result=$conn->query($sql);
  $count=$result->num_rows;



   if($result->num_rows == 1) {
   // session_register(myusername);
$_SESSION['email']="$email"; //assign session
 // $_SESSION[$myusername] = $myusername;
    header("location:contact_info.php");
  }

  else{
   header("location:wrongName.php");
   $_SESSION['myusername']="";
  }


?>