<?php
  //Local variables
$host="localhost";
$username="venusc46_774hw1";
$password="user1";
$dbname="venusc46_DS744HW1";
//Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error())
{
    echo "Connection failed: " . mysqli_connect_error();
}
?>