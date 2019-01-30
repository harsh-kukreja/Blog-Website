<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 28-12-2018
 * Time: 11:54
 */

if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];


    $email = $_POST['email'];
    $role = $_POST['role'];

    $password = password_hash($password, PASSWORD_DEFAULT);


    $user_image = $_FILES['user_image']['name'];


    $user_image_temp = $_FILES['user_image']['tmp_name'];
//    die($post_image_temp);



    move_uploaded_file($user_image_temp, "images/users/$user_image");


    //INSERTING VALUES
    include_once ("../includes/connection.php");
    $query = "INSERT INTO  users (username, password, first_name, last_name, email, image, role) VALUES (?,?,?,?,?,?,?)";
//    die($query);
    $ps = mysqli_prepare($connection , $query);

    mysqli_stmt_bind_param($ps, "sssssss", $username,$password,$first_name,$last_name,$email, $user_image,$role);

    mysqli_stmt_execute($ps);
    if(mysqli_errno()){
        die(mysqli_error($connection));
    }else{
        header("Location: users.php");
    }
}
?>

<div class="row">
    <div class="col-md-12">
        <form action="" method="post" role="form" enctype="multipart/form-data">
            <legend>Add User</legend>
            <hr>


            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" >
            </div>



            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>



            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" >
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" >
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" >
            </div>



            <div class="form-group">
                <label for="user_image">Image</label>
                <input type="file" class="form-control-file" name="user_image" id="user_image" >
            </div>




            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="0">Select a role..</option>
                    <option value="admin">Admin</option>
                    <option value="subscriber">Subscriber</option>
                </select>
            </div>



            <button type="add_user" class="btn btn-primary" name="add_user">Add User</button>
        </form>
        <div class="mb-4"></div>
    </div>

</div>
