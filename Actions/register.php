<?php

session_start();
include ('function.php');
$username= $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$age = (int) $_POST['age'];

$data = addUserToTheDatabase($username,$password,$email,$age);
if($data){
//    User added successfully
    echo " <script> alert('user added successfully') </script> ";
//    Render user to the login page
    echo "
        <script>
            window.location='../Partial/login.php'
        </script>
    
    ";
}else{
//    user is not added to the database
    echo " <script> alert('Unable to add user, Please try again by changing username or email') </script> ";
//    Render user to the register page
    echo "
        <script>
            window.location='../Partial/register.php'
        </script>
    
    ";
}