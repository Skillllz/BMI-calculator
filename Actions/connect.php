<?php
$con = mysqli_connect("localhost","root",
  "","bds");

if(!$con){
    echo '
        <script> alert("Unable to connect to the database  ! Try later") </script>
    ';
    die(mysqli_error($con));
}

?>