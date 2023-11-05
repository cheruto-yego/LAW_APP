<?php
session_start();
error_reporting(0);
include('includes/db_connection.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $Enter_email = $_POST['Enter_email'];
    $Enter_name = $_POST['Enter_name'];
    $Enter_number = $_POST['Enter_number'];
    $password = md5($_POST['password']);
    
    $query = mysqli_query($connection,"insert into client_table (email, username, password,client_number) VALUES ('$Enter_email','$Enter_name','$password','$Enter_number')");
    if ($query) {
        echo "<script> alert('User entered successfully');</script>";
    }
    else{
        echo "<script> alert('User entered successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>