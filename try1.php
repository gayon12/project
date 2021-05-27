<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="images/fav-icon.png"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <title>Sign In/up</title>
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />


    <!-- Additional CSS Files -->
  
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/teams.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

</head>


<body>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#welcome" class="logo">JIB</a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php#welcome" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="signup/try.php">Sign In / Sign Up </a></li>
                        <li class="scroll-to-section"><a href="index.php#services">Services</a></li>
                        <li class="scroll-to-section"><a href="index.php#frequently-question">FAQ</a></li>
                        <li class="submenu">
                            <a href="javascript:;">About</a>
                            <ul>
                                <li><a href="teams.php">Our Teams</a></li>
                                <li><a href="testimonials.php">Reviews</a></li>
                                <li><a href="">FAQ's</a></li>
                                <li><a href="">Blog</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="contact-us">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


<!-- ***** Welcome Area Start ***** -->


<!-- ***** Header Text Start ***** -->
<div style="overflow-wrap: normal">
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
</div>

<script src="rent4u-html/app.js"></script>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
</body>
</html>

