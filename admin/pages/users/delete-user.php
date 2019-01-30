<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 28-12-2018
 * Time: 13:20
 */




if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    include_once ("../includes/connection.php");

    $sql = "DELETE FROM users WHERE user_id=$user_id";

    mysqli_query($connection, $sql);
    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
    header("Location: users.php");

}