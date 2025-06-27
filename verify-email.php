<?php 
    $title = 'Verify Email';
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
            <h4>Verify Email</h4>
            <p>Please enter the 6 digit code that was sent to your email</p>

            <form id="verifyForm" class="mt-3">
                <div class="otp-box">
                        <input type="text" maxlength="1" class="otp-input" id="otp1" oninput="moveToNext(this, 'otp2')">
                        <input type="text" maxlength="1" class="otp-input" id="otp2" oninput="moveToNext(this, 'otp3')" onkeydown="moveToPrev(event, 'otp1')">
                        <input type="text" maxlength="1" class="otp-input" id="otp3" oninput="moveToNext(this, 'otp4')" onkeydown="moveToPrev(event, 'otp2')">
                        <input type="text" maxlength="1" class="otp-input" id="otp4" oninput="moveToNext(this, 'otp5')" onkeydown="moveToPrev(event, 'otp3')">
                        <input type="text" maxlength="1" class="otp-input" id="otp5" oninput="moveToNext(this, 'otp6')" onkeydown="moveToPrev(event, 'otp4')">
                        <input type="text" maxlength="1" class="otp-input" id="otp6" oninput="triggerVerify()" onkeydown="moveToPrev(event, 'otp5')">
                </div>
                <div class="sign-cta my-3">
                    <a href="">
                        <button type="button" class="main-btn">Verify</button>
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
