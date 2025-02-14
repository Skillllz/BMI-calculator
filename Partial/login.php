<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI-login</title>
    <link rel="stylesheet" href="../Assets/style/login.css">
</head>
<body>
    <!-- BOdy code -->
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="../Actions/login.php">
                <h1>Sign in</h1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text"
                           class="login__input"
                           placeholder="User name"
                           name="username"
                        required
                    >
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password"
                           class="login__input"
                           placeholder="Password"
                           name="password"  required>
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
<!--                <h6>Register</h6>-->
			</form>
            <a href="./register.php"> <span class="register-user"> Register</span></a>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    <!-- Code ended -->
</body>
</html>