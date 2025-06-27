<?php 
    $title = 'Login';
    require_once('./header.php');
?>

<!-- ========================================= register section ============================== -->
 <div class="all-register">
    <div class="register-content">
        <div class="register-left">
            <div class="register-logo mb-3">
                <img class="logo" src="./assets/image/logo-2.png" alt="">
                <a href="./index.php"><img class="backward" src="./assets/image/icon-1.png" alt=""></a>
            </div>
            <h4>Sign In</h4>
            <p>Please login to your account</p>
            <a href="">
                <div class="google-login mt-4">
                    <img src="./assets/image/google.png" alt="">
                    <label>Continue with Google</label>
                </div>
            </a>
            <div class="other mt-2">
                <div class="line"></div>
                <label>OR</label>
                <div class="line"></div>
            </div>

            <form action="" class="mt-4">
                <label for="email">Email</label>
                <div class="left-input mt-1 mb-3">
                    <input type="email" name="email" placeholder="Enter your email address">
                    <i class="far fa-envelope"></i>
                </div>
                <label for="password">Password</label>
                <div class="left-input mt-1 mb-3">
                    <input id="password" type="password" name="password" placeholder="Enter your password">
                    <span class="eye-icon"><i class="far fa-eye " onclick="togglePasswordVisibility()"></i></span>
                </div>
                <div class="forgot">
                    <a href="./forgot-password.php">
                        <p>Forgotten Password?</p>
                    </a>
                </div>
                <div class="sign-cta my-3">
                    <a href="./user/index.php">
                        <button type="button" class="main-btn">Sign In</button>
                    </a>
                </div>
                <div class="user-rd">
                    <p>Don't have an account? <a href="./register.php">Register</a></p>
                </div>
            </form>
        </div>
        <div class="register-right">
            <img src="./assets/image/login.jpg" alt="">
        </div>
    </div>
 </div>
<!-- ========================================= end of register section ============================== -->
<?php 
    require_once('./script.php');
?>
