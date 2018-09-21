<?php
$servername = "localhost";
$username = "venusc46_774hw1";
$password = "user1";
$database = "venusc46_DS744HW1";
$conn = new mysqli($servername, $username, $password, $database );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($conn , "DELETE FROM user WHERE id=$id");
if($result){
header("Location:contact_info.php");
}
?>