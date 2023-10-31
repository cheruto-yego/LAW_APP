<?php
session_start();
error_reporting(0);
include('includes/db_connection.php');
error_reporting(0);

if (isset($_POST['submit'])){
    $client_email = $_POST['client_email'];
    $client_name = $_POST['client_name'];
    $client_number = $_POST['client_number'];
    $password = md5($_POST['password']);
    
    $query = mysqli_query($connection, "insert into client_table (email, username, password) VALUES ('$client_email','$client_name','$password','$client_number')");
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <h1>Signup Form</h1>
    <form action="" method="POST">
        <h2>Client Information:</h2>
        <label for="client_email">Email:</label>
        <input type="email" id="client_email" name="client_email" required><br><br>
        <label for="client_name">User Name:</label>
        <input type="text" id="client_name" name="client_name" required><br><br>
        <label for="client_number">User Number:</label>
        <input type="text" id="client_number" name="client_number" required><br><br>
        
        <label for="client_address">Password:</label>
        <input type="text" id="password" name="password" required><br><br>
        
     

       

        <!-- <h2>Lawyer Information:</h2>
        <label for="lawyer_name">Name:</label>
        <input type="text" id="lawyer_name" name="lawyer_name" required><br><br>
        
        <label for="lawyer_email">Email:</label>
        <input type="email" id="lawyer_email" name="lawyer_email" required><br><br>

        <label for="client_address">Address:</label>
        <input type="text" id="client_address" name="client_address" required><br><br> -->

     

        <input type="submit" name = "submit">
    </form>
</body>
</html>
