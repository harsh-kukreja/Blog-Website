<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 28-12-2018
 * Time: 13:20
 */




if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    include_once ("../includes/connection.php");

    $sql = "DELETE FROM posts WHERE post_id=$post_id";

    mysqli_query($connection, $sql);
    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
    header("Location: posts.php");

}