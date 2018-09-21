<!DOCTYPE html>
<html lang="en">

<head>
 <title>Vocal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

 <div class="container-fluid">
   <nav class="navbar navbar-expand-sm bg-light navbar-light navbar-fixed-bottom">
     <a class="navbar-brand" href="home.html"><img src="vocal-logo2.JPG" class="rounded" alt="Vocal logo" width="80" height="40"></a>
     <ul class="navbar-nav mr-auto">
	<li class="nav-item">
          <a class="nav-link" href="announcements.html">Announcements</a>
        </li>
       <li class="nav-item">
         <a class="nav-link" href="event.html">Events</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Documents
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="#">company bylaws for corporations</a>
           <a class="dropdown-item" href="#">meeting minutes</a>
           <a class="dropdown-item" href="#">non-disclosure agreements</a>
           <a class="dropdown-item" href="#">memorandum of understanding templates</a>
         </div>
       </li>

     </ul>

     <ul class="navbar-nav">
       <button class="btn btn-success ml-auto"><a class="nav-link" href="register.html">Register</a></button>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
             <span class="navbar-toggler-icon"></span>
         </button>
       <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
         <ul class="navbar-nav text-right">
           <li class="nav-item active">
             <a class="nav-link" href="login.html">Login</a>
           </li>
         </ul>
       </div>
     </ul>
   </nav>
 </div>



 <br>
 <br>

<body>
<div class="container">
<center><h2> Employee Contact Information</h2></center>
<br>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Job Title</th>
<th>Phone Number</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<?php
$servername = "localhost";
$username = "venusc46_774hw1";
$password = "user1";
$database = "venusc46_DS744HW1";
$conn = new mysqli($servername, $username, $password, $database );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






$sql = "SELECT id, fname, lname,email,phone_num,job_title FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td>";
    echo "<td>".$row["fname"]."</td>";
    echo "<td>".$row["lname"]."</td>";
    echo "<td>".$row["job_title"]."</td>";
    echo "<td>".$row["phone_num"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td><a href=\"edit-form.php?id={$row['id']}\">Edit</a>";
    echo "<td><a href=\"delete.php?id={$row['id']}\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    echo "</tr>";
    
    }
    echo "</table>";
    }
    else{
    echo "0 result";
    }
    $conn->close();
?>
</table>

<center><h1><a href="logout.php">Logout</a></h1></center>



</div>
</body>
</html>
