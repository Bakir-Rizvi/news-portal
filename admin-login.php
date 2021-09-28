<?php

  require("db/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
 <!-- custom css -->
<link rel="stylesheet" type="text/css" href="style/admin.css">
</head>
<body>
<div class="container">
	<form  method="post">
		<h3>Admin Login</h3>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control"  id="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="form-control"  id="password" required>
  </div>
  <div class="d-flex justify-content-between">
    <input type="submit" name="login" class="btn btn-primary" value="login">
    <a href="index.php" class="btn btn-success py-1" id="home">HOME PAGE</a>
</div>

</form>

</div>

</body>
</html>

<?php
  if (isset($_POST['login']))
  {
    $query="SELECT * FROM `admin-login` WHERE `email`='$_POST[email]' AND `password`='$_POST[password]'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)>0) 
    {
     session_start();
     $_SESSION['email']=$_POST['email'];
     header("location:admin-panel.php");
    }
    else
    {
      echo "<script>alert('incorect Password');</script>";
    }
  }
?>
