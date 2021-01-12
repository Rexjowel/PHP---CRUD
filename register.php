<?php include('includes/header.php')  ?>


<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Register Now</h4>
				</div>

				<div class="card-body">
					
						<form action="code.php" method="POST">

							<div class="form-group">
							    <label>First Name</label>
							    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
							  </div>

							  <div class="form-group">
							    <label>Last Name</label>
							    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
							  </div>

							  <div class="form-group">
							    <label>Email Address</label>
							    <input type="email" class="form-control" name="email" placeholder="Enter Name" >
							  </div>

							  <div class="form-group">
							    <label>Password</label>
							    <input type="password" class="form-control" name="password" placeholder="Enter Password" >
							  </div>

							  <div class="form-group">
							    <label>Phone Number</label>
							    <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone" >
							  </div>
							  

							  <a href="index.php" class="btn btn-danger">Cancel</a>

							  <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
						</form>

				</div>
			</div>
		</div>
	</div>
</div>



<?php include('includes/footer.php')  ?>