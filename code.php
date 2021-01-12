
<?php include('db.php')  ?>  

<?php 

		// insert data 


	if (isset($_POST['register_btn'])) {

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone_number = $_POST['phone_number'];


		$query = "INSERT INTO register (first_name,last_name,email,password,phone_number) VALUES ('$first_name','$last_name','$email','$password','$phone_number') ";

		$query_run = mysqli_query($conn,$query);


		if ($query_run) {
			//echo "Data Inserted";
			header('location: index.php');
		}

		else

		{
			//echo "Data Not Inserted";
			header('location: register.php');
		}
		
	}


// update data

	if (isset($_POST['register_update_btn'])) 
	{
		$update_id = $_POST['edit_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone_number = $_POST['phone_number'];

		$query_update = "UPDATE register SET first_name='$first_name',last_name='$last_name',email='$email',password='$password',phone_number='$phone_number' WHERE id='$update_id' ";

		$query_update_run = mysqli_query($conn,$query_update);

		if ($query_update_run)
		{
			header("location:index.php");
		}

		else
		{
			header("location:index.php");
		}

	}

// delete data

if (isset($_POST['register_delete_btn'])) 
{
	$delete_id = $_POST['delete_id'];

	$reg_query = "DELETE FROM register WHERE id='$delete_id'  ";

	$reg_query_run = mysqli_query($conn,$reg_query);


	if ($reg_query_run) 
	{
		header("location:index.php");	
	}

	else
	{
		header("location:index.php");
	}
}



?>