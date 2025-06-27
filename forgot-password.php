<?php 
    $title = 'Forgot Password';
    require_once('./header.php');
?>

<!-- ========================================= register section ============================== -->
 <div class="all-register">
    <div class="register-content">
        <div class="register-left">
            <div class="register-logo mb-3">
                <img class="logo" src="./assets/image/logo-2.png" alt="">
                <a href="./login.php"><img class="backward" src="./assets/image/icon-1.png" alt=""></a>
            </div>
            <h4>Forgot Password</h4>
            <p>Please enter the email address used during registration. an instruction on how to reset your password will be sent to your email</p>

            <form action="" class="mt-4">
                <label for="email">Email</label>
                <div class="left-input mt-1 mb-3">
                    <input type="email" name="email" placeholder="Enter your email address">
                    <i class="far fa-envelope"></i>
                </div>
                <div class="sign-cta my-3">
                    <a href="">
                        <button type="button" class="main-btn">Send Instruction</button>
                    </a>
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
