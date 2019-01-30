<?php
/**
 * Created by PhpStorm.
 * User: Harsh
 * Date: 20-01-2019
 * Time: 21:00
 */
session_start();
$_SESSION['user_id'] = null;
$_SESSION['role'] = null;



session_unset();

header("Location: ../index.php");