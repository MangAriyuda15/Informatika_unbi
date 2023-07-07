<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:admin.php");
    exit();
}
print_r($_SESSION);
print_r($_COOKIE); 