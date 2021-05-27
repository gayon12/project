<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<html lang="en">
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

            <form method="post" action="try.php" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <?php include ('error.php');?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" >
                </div>

                <div class="input-field">
                    <i class = "fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn solid" name="login_user">Login</button>
            </form>
            <form method="post" action="try.php" class="sign-up-form">

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
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Ano pa hinihintay mo? Tarana at Lalarga Na!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="img/15738847.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
        <div class="content">
            <h3>One of us ?</h3>
            <p>
                Sakay Na!
            </p>
            <button class="btn transparent" id="sign-in-btn">
                Sign in
            </button>
        </div>
        <img src="img/sign%20up.png" class="image" alt="" />
    </div>
</div>
</div>
<script src="app.js""></script>
</body>
</html>

