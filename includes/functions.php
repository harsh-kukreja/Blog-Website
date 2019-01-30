<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 27-12-2018
 * Time: 10:57
 */
include_once ("connection.php");

function getAllComments($condition = 1){
    global $connection;
    $sql = "SELECT * FROM comments WHERE {$condition}";
    $result = mysqli_query($connection, $sql);

    return $result;
}

function getAllPosts($condition = 1){
    global $connection;
    $sql = "SELECT * FROM posts WHERE {$condition}";
    $result = mysqli_query($connection, $sql);

    return $result;
}

function getAllUsers($condition = 1){
    global $connection;
    $sql = "SELECT * FROM users WHERE {$condition}";
    $result = mysqli_query($connection, $sql);

    return $result;
}
function getAllCategories($condition = 1){
    global $connection;
    $sql = "SELECT * FROM categories WHERE $condition";
    $result = mysqli_query($connection, $sql);
    $categories = array();
    $i = 0;
    while( $row = mysqli_fetch_assoc($result)){
        $single_category = array();
        $single_category['cat_id'] = $row['cat_id'];
        $single_category['cat_title'] = $row['cat_title'];
        $categories[$i] = $single_category;

        $i++;
    }
//    print_r($categories);
//    for($i=0;$i<count($categories);$i++){
//        for($j=1;$j<count($categories);$j++){
//            echo $categories[$i][$j];
//        }
//
//    }
    // for testing

    return $categories;
}

//getAllCategories();
?>


