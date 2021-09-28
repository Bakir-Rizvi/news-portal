 <?php

  require("db/connection.php");
   require("include/footer.php");

  session_start();

  if($_SESSION['email']==true){

}else{
  header("location:admin-login.php");
}
$page='addcategory';
  include('include/header.php');
  ?>



 <div style=" width: 50%; margin-left: 25%; margin-top: 10%">
  	<form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateform() ">
  		<h1>ADD CATEGORIES</h1>
  		<hr>
  <div class="form-group">
    <label for="category">Category:</label>
    <input type="text" name="category" class="form-control" placeholder="Enter Category Name" id="text">
  </div>
 <div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" name="content" placeholder="Enter Description" id="comment"></textarea>
</div>
  <input type="submit" name="upload" class="btn btn-danger" value="Add Category">
</form>
<script>
  function validateform(){
    var x = document.forms['categoryform']['category'].value;
      if (x=="") {
        alert('Category Must Be Filled Out !')
        return false;
      }
  }

</script> 
  	
  </div>
   
    <?php


    if (isset($_POST['upload']))
     {
          $check=mysqli_query($conn,"SELECT * FROM `category` WHERE `category_name`='$_POST[category]' ");

          if (mysqli_num_rows($check)>0) {
            echo "<script> alert('Category Name Already Has Been Taken!!') </script>";

            exit();
          }

          $query=mysqli_query($conn,"INSERT INTO `category`(`category_name`, `description`) VALUES ('$_POST[category]','$_POST[content]')");
    

         if($query) {
             echo  "<script> alert('Category Add Successfully') </script>";
         }else{
          echo "<script> alert('Please Try Again')</script>";
        }
 
    }
    ?>