<?php
session_start();
include ('./Actions/function.php');
if(!isset($_SESSION['bmi-username'])){
    echo "
        <script>
//        alert('Login Before checking')
        window.location='./Partial/login.php'
</script>
    
    ";
}

$dataOfUser = getAllTheUserDetailsFromId();
if($dataOfUser[5]=="0"){
    echo "
        <script>
//        alert('Login Before checking')
        window.location='./Partial/bmi.php'
</script>
    
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI-cal</title>
    <link rel="stylesheet" href="./Assets/style/index.css">
</head>
<body>
<header>
    <nav>
        <h1>BMI-Cal</h1>
        <a href="./Actions/logout.php"><button class="button-31">LOGOUT</button></a>
    </nav>
</header>
    <div class="contents-main">
        <div class="main-container">

            <a href="./Partial/bmi.php"><button class="button-27"><span>Calculate BMI</span></button></a>
            <a href="./Partial/register.php"><button class="button-27"><span>Register</span></button></a>
        </div>
    </div>
<div class="other-content">
<!--    Other contents-->
<!--    <span> Details :  --><?php //echo $dataOfUser[2] ?><!--</span>-->
    <div class="container">
<!--        BMI diet Card-->
        <?php
        $bmi = $dataOfUser[5];
        ?>
<!--        preferred diet on BMI-->
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>BMI : <?php echo $bmi ?></h3>
                    <h4>Preferred Diet</h4>
<!--                    -->
                    <?php
                    $bmidiet = getDietBasedOnBMI($bmi);
                    ?>
                    <div class="para">
                       <div class="data"> <span>Breakfast</span> : <?php echo $bmidiet[3] ?></div>
                       <div class="data">
                        <span>Mid -Meal </span> : <?php echo $bmidiet[4] ?>

                       </div>
                       <div class="data">

                        <span> Lunch </span> : <?php echo $bmidiet[5] ?>
                       </div>
                        <div class="data">

                        <span>Dinner </span>: <?php echo $bmidiet[6] ?>
                        </div>
                    </div>
<!--                    <a href="#">Read More</a>-->
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
<!--                    Weight loss data-->
                    <?php
                    $lossdata = getWeightGainOrLossDetailsOnAgeAndType($dataOfUser[4],"loss");
                        if($lossdata){


                    ?>
                    <h3>For Weight loss</h3>
                    <h4>Preferred Diet</h4>
                    <div class="para">
                        <div class="data"> <span>Breakfast</span> : <?php echo $lossdata[2] ?></div>
                        <div class="data">
                            <span>Mid -Meal </span> : <?php echo $lossdata[3] ?>

                        </div>
                        <div class="data">

                            <span> Lunch </span> : <?php echo $lossdata[4] ?>
                        </div>
                        <div class="data">

                            <span>Dinner </span>: <?php echo $lossdata[5] ?>
                        </div>
                    </div>
                    <?php
                        }else{
                            echo "
$dataOfUser[6]
<h3>Weight loss diet</h3>
<h4>Data Not found</h4>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <?php
                    $gaindata = getWeightGainOrLossDetailsOnAgeAndType($dataOfUser[4],"gain");
                    if($lossdata){


                    ?>
                    <h3>For Weight Gain</h3>
                    <h4>Preferred Diet</h4>
                    <div class="para">
                        <div class="data"> <span>Breakfast</span> : <?php echo $gaindata[2] ?></div>
                        <div class="data">
                            <span>Mid -Meal </span> : <?php echo $gaindata[3] ?>

                        </div>
                        <div class="data">

                            <span> Lunch </span> : <?php echo $gaindata[4] ?>
                        </div>
                        <div class="data">

                            <span>Dinner </span>: <?php echo $gaindata[5] ?>
                        </div>
                    </div>
                    <?php
                    }else{
                        echo "$dataOfUser[6]
<h3>Weight loss diet</h3>
<h4>Data Not found</h4>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!--    Other contents ends-->
</div>

</body>
</html>