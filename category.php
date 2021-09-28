 <?php
	require('db/connection.php');
	require('include/footer.php');
  session_start();

  if($_SESSION['email']==true){

}else{
  header("location:admin-login.php");
}
$page='category';
  include('include/header.php');
  ?>

  <div style=" width: 50%; margin-left: 25%; margin-top: 10%">
  	<div class="text-right">
  	<a class="btn btn-primary" href="addcategory.php">Add Category</a>
  </div>
  	<table class="table table-bordered">
  		<tr>
  			<th>ID</th>
  			<th>Category Name</th>
  			<th>Description</th>
  			<th>Edit</th>
  			<th>Delete</th>
  		</tr>
  		<?php
  	
  		$query=mysqli_query($conn,"SELECT * FROM `category` ");
  		while($row=mysqli_fetch_array($query)) {
  			
  		
  		?>
  		<tr>
  			<td><?php echo $row[0];  ?></td>
  			<td><?php echo $row[1];?></td>
  			<td><?php echo substr($row[2],0,150);?></td>
  			<td><a href="edit.php?edit=<?php echo $row[0]; ?>" class="btn btn-info">edit</a></td>
  			<td><a href="delete.php?del=<?php echo $row[0]; ?>" class="btn btn-danger">delete</a></td>
  		</tr>
  		<?php    }  ?>
  	</table>
  		
  	</div>
  	
  	