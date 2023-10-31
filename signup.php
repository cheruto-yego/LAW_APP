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
    
    $query = mysqli_query($connection, "insert into client_table (email, username,number,password) VALUES ('$Enter_email','$Enter_name','$Enter_number''$password')");
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
    <title>Contact Us Form</title>
</head>
<body>
    <h1>Contact Us Form</h1>
    <form action="" method="POST">
        <h2>Client Information:</h2>
        <label for="Enter_email">Enter Email:</label>
        <input type="email" id="Enter_email" name="Enter_email" required><br><br>
        <label for="Enter_name">Enter Name:</label>
        <input type="text" id="Enter_name" name="Enter_name" required><br><br>
        <label for="Enter_number">Enter Number:</label>
        <input type="text" id="Enter_number" name="Enter_number" required><br><br>
        
        <label for="Enter_address">Password:</label>
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
