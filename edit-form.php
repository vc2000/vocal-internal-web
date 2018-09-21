<?php
  session_start();
  session_destroy();
?>

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

<body>
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
  <div class="container">
    <center><h1>Update Employee Information</h1></center>
    
<form name="update" method="post" action="edit.php" target="message" data-toggle="validator">
	  <div class="form-row">
	    <div class="col">
         	 <label for="id">ID</label>
          	<input type="int" class="form-control" name="id" placeholder="ID"required>
          <br>
            </div>
            <div class="col">
         	 <label for="fname">First name</label>
        	 <input type="text" class="form-control" name="fname" placeholder="First name">
          <br>
            </div>
            <div class="col">
         	 <label for="lname">Last name</label>
        	 <input type="text" class="form-control" name="lname" placeholder="Last name">
          <br>
            </div>
           </div>
            
            
           <div class="form-row">
           	<div class="col">
                <label for="exampleFormControlSelect2">Job Titles</label>
               	      <select multiple class="form-control" id="exampleFormControlSelect2" name="job_title" required>
		        <option value="Data Scientist">Data Scientist</option>
		        <option value="Software Engineer">Software Engineer</option>
		        <option value="Sales Associate">Sales Associate</option>
		        <option value="Project Manager">Project Manager</option>
		        <option value="Public Relations">Public Relations</option>
		      </select>
                 </div>
            <div class="col">
              <label for="phone_num">Phone number</label>
              <input type="text" class="form-control" name="phone_num" placeholder="Phone" required>
            </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="Update" value="Update">Update</button>
              <p>Back to <a href="contact_info.php" target="_parent"> the data</a>.</p>
            </div>
	    
	    
  </div>

</body>

</html>
