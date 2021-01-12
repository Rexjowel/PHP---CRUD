<?php include('includes/header.php')  ?>
<?php include('db.php')  ?>  

<?php

	$id = $_GET['id'];

	$register_query = "SELECT * FROM register WHERE id='$id' ";

	$register_query_run = mysqli_query($conn,$register_query);


	if (mysqli_num_rows($register_query_run) > 0) 
	{
		while ($row = mysqli_fetch_array($register_query_run)) 
		{
		    

	?>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Register - Edit</h4>
				</div>

				<div class="card-body">
					
						<form action="code.php" method="POST">

							<input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">

							<div class="form-group">
							    <label>First Name</label>
							    <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name']; ?>">
							  </div>

							  <div class="form-group">
							    <label>Last Name</label>
							    <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name']; ?>">
							  </div>

							  <div class="form-group">
							    <label>Email Address</label>
							    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
							  </div>

							  <div class="form-group">
							    <label>Password</label>
							    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
							  </div>

							  <div class="form-group">
							    <label>Phone Number</label>
							    <input type="text" class="form-control" name="phone_number" value="<?php echo $row['phone_number']; ?>">
							  </div>
							  

							  <a href="index.php" class="btn btn-danger">Cancel</a>

							  <button type="submit" name="register_update_btn" class="btn btn-info">Update Data</button>
						</form>

				</div>
			</div>
		</div>
	</div>
</div>


 <?php 

		}

	}
	else
	{
		echo "No Data Found By This Url Id";
	}

 ?>

<?php include('includes/footer.php')  ?>