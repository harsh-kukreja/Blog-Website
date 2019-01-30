<div class="row">
    <div class="col-md-12 pb-4  ">
        <a href="users.php?source=add_user" class="btn btn-primary">Add User</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 offset-0">
        <div class="table-responsive">
            <table class="table table-hover table-bordered ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>

                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultSet = getAllUsers();
                while($row = mysqli_fetch_assoc($resultSet)){
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $image = $row['image'];
                    $role = $row['role'];




                    echo <<<USER
<tr>                                        
<td>$user_id</td>

<td><img src="images/users/$image" alt="user_image " class="img-fluid rounded-circle" ></td>
<!--<td>IMAGE</td>-->
<td>$username</td>
<td>$password</td>
<td>$first_name</td>

<td>$last_name</td>
<td>$email</td>
<td>$role</td>

<td><a href="users.php?source=edit_post&post_id=post_id" class="btn btn-info"><span class="fa fa-edit"></span></a></td>

<td><a href="users.php?source=delete_user&user_id=$user_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
</tr>        
USER;


                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>