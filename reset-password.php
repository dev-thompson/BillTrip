<?php 
    $title = 'Reset Password';
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
            <h4>Reset Password</h4>
            <p>Create new Password</p>

            <form action="" class="mt-3">
                <label for="password">New Password</label>
                <div class="left-input mt-1 mb-3">
                    <input id="password" type="password" name="password" placeholder="New password">
                    <span class="eye-icon"><i class="far fa-eye " onclick="togglePasswordVisibility()"></i></span>
                </div>
                <label for="password">Confirm Password</label>
                <div class="left-input mt-1 mb-3">
                    <input id="con-password" type="password" name="password" placeholder="Confirm password">
                    <span class="eye-visible"><i class="far fa-eye " onclick="togglePassword()"></i></span>
                </div>
                <div class="sign-cta my-3">
                    <a href="">
                        <button type="button" class="main-btn">Change Password</button>
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
