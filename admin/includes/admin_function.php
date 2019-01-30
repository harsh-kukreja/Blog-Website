<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 27-12-2018
 * Time: 13:14
 */
include_once ("admin_connection.php");
function insert($table_name ,$column_list, $values){

    global $connection;
    $sql = "INSERT INTO {$table_name} ({$column_list}) VALUES ({$values})";
//    die($sql);
    mysqli_query($connection, $sql);

    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
}

function delete($table_name, $condition){
    global $connection;
    $sql = "DELETE FROM $table_name WHERE $condition";

    mysqli_query($connection, $sql);

    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
}