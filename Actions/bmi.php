<?php

session_start();
include ('function.php');

if(!isset($_SESSION['bmi-username'])){
    echo "
        <script>
        alert('Login Before checking')
        window.location='../Partial/login.php'
</script>
    
    ";
}

$height =(float) $_POST['height'];
$weight =(float) $_POST['weight'];


//Calculate the BMI and edit it in the database
$bmi =  ($weight / ($height*$height))*10000;


$result = addBMIOfUserFromId($bmi,$weight,$height);
if(!$result){
    echo "
        <script>
        alert('Please try again')
        window.location='../Partial/bmi.php'
</script>
    
    ";
}
echo "
        <script>
//        alert('Please try again')
        window.location='../'
</script>
    
    ";

