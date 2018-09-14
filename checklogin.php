<?php
session_start();
if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];
}
else {
echo "<script type=text/javascript>location.href='checklogin.html'</script>";
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

  <title>Login successful</title>


</head>

<body style="background-color: burlywood">



	      Welcome<b>

	      <?php

		echo $_SESSION['email'];

	      ?>



</body>

</html>
