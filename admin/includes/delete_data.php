<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 27-12-2018
 * Time: 15:04
 */

include_once ("admin_function.php");

if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    delete("categories", "cat_id = {$cat_id}");
    header("Location: ../categories.php");
}