<?php
session_start();
include ('function.php');

if(!$_POST['username']){
    echo "
        <script>
        window.location='../Partial/login.php'
</script>
    ";

}



$username = $_POST['username'];
$password = $_POST['password'];
// Check the username

$userVerification =checkUserByUsernameAndPassword($username,$password);
if(!$userVerification){
//    User is not found , render back the user to login page to retry
    echo "
        <script>
        alert('Unable to find the user with entered credentials , Please try another credentials')
        window.location='../Partial/login.php'
        </script>
    ";
}

// User found
echo "
        <script>
        alert('Login Successful')
        </script>
    ";
// add the username to the session with id of the user
$_SESSION['bmi-username']=$userVerification[1];
$_SESSION['bmi-id']=$userVerification[0];
$_SESSION['bmi-email']=$userVerification[2];
// User found
echo "
        <script>
       window.location='../'
        </script>
    ";
    