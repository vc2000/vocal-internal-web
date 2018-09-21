<?php
session_start();
if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];
}
else {
echo "back to the previous page";
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

  <title>Login successful</title>


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
         <a class="nav-link" href="event.html">Events</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="contact_info.html">Employee Contact</a>
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

<center><h1>Wrong Password or Email does not exist!</h1></center>
<center><h1>Please go back to <a class="nav-link" href="login.html">Login</a></h1></center>



</body>

</html>
