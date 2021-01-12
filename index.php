
<?php include('includes/header.php')  ?>
<?php include('db.php')  ?>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h4>
                        PHP - CRUD
                         <a href="register.php" class="btn btn-primary float-right">Register/Add</a>
                        </h4>
                       
                    </div>

                    <div class="card-body">
                        <?php
                            $register = "SELECT * FROM register";
                            $register_read = mysqli_query($conn,$register);

                            if(mysqli_num_rows($register_read) > 0)
                            {

                                ?>

                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Email</th>
                              <th scope="col">Password</th>
                              <th scope="col">Phone Number</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>


                            </tr>
                          </thead>
  
                          <tbody>

                            <?php
                                while($reg_row = mysqli_fetch_array($register_read))
                                {
                            ?>
                            <tr>
                              <th><?php echo $reg_row['id'] ?></th>
                              <td><?php echo $reg_row['first_name'] ?></td>
                              <td><?php echo $reg_row['last_name'] ?></td>
                              <td><?php echo $reg_row['email'] ?></td>
                              <td><?php echo $reg_row['password'] ?></td>
                              <td><?php echo $reg_row['phone_number'] ?></td>
                              <td>
                                    <a href="register-edit.php?id=<?php echo $reg_row['id'] ?>" class="btn btn-info float-right">Edit</a>
                              </td>
                              <td>
                                <form action="code.php" method="POST">
                                    <input type="hidden" value="<?php echo $reg_row['id']; ?>" name="delete_id">
                                    <button type="submit" name="register_delete_btn" class="btn btn-danger">Delete</button>
                                </form>
                                   
                              </td>
                            </tr>

                            <?php } ?>
                           
                          </tbody>
                        </table>

                           <?php
                            }

                            else

                            {
                                echo "NO record Found";
                            }

                            ?> 

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php')  ?>