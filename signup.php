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

  //update
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$job_titles_id=$_POST['job_titles_id'];
$phone_num=$_POST['phone_num'];
$password=$_POST['password'];
$sql ="INSERT INTO user contacts (fname,lname,job_titles_id,email,password,phone_num ) VALUES ('$fname','$fname','$job_titles_id','$email','$password','$phone_num')"


if($conn->query($sql) === false){
trigger_error('Wrong SQL: '.$sql .'Error: '. $conn->error, E_USER_ERROR);
echo "Success!";
}else {
"Error updating record " . $conn->error;
}
}

$conn->close();
?>
