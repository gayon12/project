<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">

            <form method="post" action="register.php" >
                <?php include('error.php'); ?>
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class=""fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <div class="input-field">
                    <i class ="fas fa-lock"></i>
                    <input type="password" name="password_1" placeholder="Password">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_2" placeholder="Password">
                </div>
                    <button type="submit" class="btn" name="reg_user">Register</button>
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                    </p>
                </form>
        </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
               <button class="btn transparent" id="sign-up-btn" >
                    Sign up
                </button>
            </div>
            <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                Sign in
                </button>
            </div>
            <img src="img/register.svg" class="image" alt="" />
        </div>
    </div>
</div>
<script src="rent4u-html/app.js"></script>
</body>
</html>