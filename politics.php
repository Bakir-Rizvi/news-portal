 <?php
  require("db/connection.php");
 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NEWS</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="style/index.css" rel="stylesheet">

   

  </head>
  <body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-between">
  <a class="navbar-brand py-3" href="#">NEWS </a>
  <form class="form-inline">
   <a href="admin-panel.php" class="btn btn-light py-3">ADMIN LOGIN</a>
  </form>
</nav>

<div class="container-fluid">
          <div class="row">
         <div class="col-sm-3 col-md-6 col-lg-4 bg-light"> 
            <div class="d-flex flex-column bg-light container-fluid" id="dabo">
               
                <div class="port-item1 p-2 border ">
                  
                    
                    <a href="index.php"onclick="('Home');">Home</a>
                    
                    
                </div>
              <div class="port-item1 p-2 border "> 
                <a href="politics.php"onclick="('Home');">POLITICS</a>
              </div>
               <div class="port-item1 p-2 border active">
                <a href="sport.php"onclick="('Home');">SPORT</a>
                </div>
               <div class="port-item1 p-2 border">
                <a href="technology.php"onclick="('Home');">TECHNOLOGY</a>
                </div>
               <div class="port-item1 p-2 border">
                <a href="content.php"onclick="('Home');">ABOUT US</a>
                </div>
              
            </div>
            </div>
           <div class="col-sm-3 col-md-6 col-lg-5">
            
            <hr>

             <div class="d-flex flex-column bg-light container-fluid" id="dabo2">
                  

                  <hr>

                
                   <?php

      $query=mysqli_query($conn,"select title,thumbnail from news value where category= 'POLITICS'");
       while ($row=mysqli_fetch_array($query)) {


            ?>

 <div class="row no-gutters">
      <div class="col-9 ">
      <a href="content.php"> <h2> <?php echo $row['title']; ?></h2></a>
      </div>
      <div class="col-3">
         <img class="image-container" src="images/<?php echo $row['thumbnail'];?>" alt="Generic placeholder image">
      </div>
    </div>

      <hr class="featurette-divider">

      <?php  } ?>
    </div>
  </div>
        </div>
        </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>