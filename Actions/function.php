<?php
//session_start();
include ('connect.php');

//Done
// verified
function checkDuplicateUserByUsername($username){
/*
* return : true  if no user is present with such username
*  else : return false
*
*
* required before adding a new user in database
* */
$query = "select id,username,email from `user` where username='$username';";
$result = mysqli_query($GLOBALS['con'],$query);

$data =  mysqli_fetch_all($result);
if($data){
return true;
}
return false;

}
//Done
//verified
function addUserToTheDatabase($username,$password,$email,$age){
/*
* return : true if user is added successfully
*  else: return false
*
*
* Adding the user to the database
*
* check if it already exists using checkDuplicateUserByUsername($username)
* */
//    TO verify whether the username is unique or not
$verify = checkDuplicateUserByUsername($username);
if($verify){
return false;
}
$query = "insert into user (username,password,email,age) values ('$username','$password','$email',$age)";
$result = mysqli_query($GLOBALS['con'],$query);
if($result){
return true;
}

return false;
}
//done
// verified
function checkUserByUsernameAndPassword($username,$password){
/*
* return : data if user is present with the $username and $password
*  else : false
*
* */
$query = "select id,username,email from `user` where username='$username' and password = '$password'";
$result = mysqli_query($GLOBALS['con'],$query);

$data =  mysqli_fetch_all($result);
if($data){
return $data[0];
}
return false;
}

// User functions ended

/*
 * Application funtions start
 *
 * */

function getAllTheUserDetailsFromId(){
    /*
     *
     *
     * SELECT * FROM `user` where id=1;
     * */
    $id = $_SESSION['bmi-id'];
    $query = "SELECT * FROM `user` where id=$id";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}

function getWeightGainOrLossDetailsOnAgeAndType($age,$type){
    /*
     * return : diet to gain or lose the weight
     *
     * params:
     *  Age of the patient
     *
     * */
    $query = "select * from `weight` where type='$type' and weightlb<=$age and weightub>=$age; ";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;

}


function getDietBasedOnBMI($bmi){
    /*
     * return : diet for the passed BMI
     * params: BMI calculated
     *
     * Query - SELECT * FROM `details` where bmiub>18 and bmilb<18;
     * */
    $bmi=(float)$bmi;
    $query = "SELECT * FROM `details` where bmiub>$bmi and bmilb<$bmi ";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;

}

function addBMIOfUserFromId($bmi,$weight,$height){
    /*
     * params:
     *  id from $_SESSION['bmi-id']
     *  update `user` SET bmi=16.6 WHERE id=1;
     * */
    $id = $_SESSION['bmi-id'];
    $query = "update `user` SET bmi=$bmi WHERE id=$id";
    $result = mysqli_query($GLOBALS['con'],$query);
    if(!$result){
        return false;
    }
    $query = "update `user` SET weight=$weight WHERE id=$id";
    $result = mysqli_query($GLOBALS['con'],$query);
    if(!$result){
        return false;
    }
    return true;
}
