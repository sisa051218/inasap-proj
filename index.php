<?php
session_start();
include('connect.php');

// Check if the user is logged in
if (isset($_SESSION['login_email'])) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoundIt!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--ICONS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <!-- Header -->
     <header>
        <nav class="nav">
            <a href="index.php" class="nav_logo">FoundIt!</a>        
            <button class="button" id="form-open">Login</button>
        </nav>
     </header>

     <!--Home-->

     <section class="home">
     <div class="form_container">
            <i class="fa-solid fa-x form_close"></i>
            <!--Login Form-->
            <div class="form login_form">
                <form method="post" action="login-logic.php">
                    <h2>Login</h2>

                    <div class="input_box">
                        <input type="email" name="login_email" placeholder="Enter your email" required>
                        <i class="fa-solid fa-envelope email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" name="login_password" placeholder="Enter your password" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i class="fa-solid fa-eye-slash pw-hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <input type="submit" class="button" value="Login Now">

                    <div class="login_signup">
                        Don't have an account? <a href="#" id="signup"> Register</a>
                    </div>
                </form>
            </div>

            <div class="form reg_from">
                <form action="">
                    <h2>Register</h2>

                    <div class="input_box">
                        <input type="email" name="reg_email" placeholder="Enter your email" required>
                        <i class="fa-solid fa-envelope email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" name="reg_password" placeholder="Create password" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i class="fa-solid fa-eye-slash pw-hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="confirm_password" name="reg_confirmpass" placeholder="Confirm password" required>
                        <i class="fa-solid fa-lock password"></i>
                        <i class="fa-solid fa-eye-slash pw-hide"></i>
                    </div>

                    <input type="submit" class="button" value="Register Now">

                    <div class="login_signup">
                        Already have an account? <a href="#" id="login"> Login</a>
                    </div>
                </form>
            </div>
     </section>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
     <script src="script.js"></script>
</body>
</html>