
    <?php 
        $title = "Reset Password";
        require_once('./header.php');
    ?>


<!-- ================================= register section =============================== -->
 <section class="all-register">
    <div class="register-content margin">
        <div class="register-left">
            <img src="./assets/image/login-2.png" alt="">
        </div>
        <div class="register-right">
            <div class="register-right-content">
                <div class="register-logo">
                    <a href="./"><img src="./assets/image/logo-2.png" alt=""></a>
                </div>

                <form action="">
                    <div class="register-head mb-4">
                        <h4>Create New Password</h4>
                        <p>Enter your new password here</p>
                    </div>
                      <div class="pass mb-3">
                          <div class="pass-group">
                              <input id="password" type="password" name="password" placeholder=" " required>
                              <label for="password">New Password</label>
                          </div>
                          <span class="eye-icon"><i class="far fa-eye " onclick="togglePasswordVisibility()"></i></span>
                      </div>
                      <div class="pass mb-3">
                          <div class="pass-group">
                              <input id="con-password" type="password" name="password" placeholder=" " required>
                              <label for="password">Confirm Password</label>
                          </div>
                          <span class="eye-visible"><i class="far fa-eye " onclick="togglePassword()"></i></span>
                      </div>
                       <div class="register-cta mb-3">
                            <a href="">
                                <button type="button" class="main-btn w-100">Reset Password <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="currentColor" d="M5.47 17.47a.75.75 0 1 0 1.06 1.06zm1.06 1.06l12-12l-1.06-1.06l-12 12z" opacity="0.5" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 6h9v9" />
                                    </g>
                                </svg></button>
                            </a>
                        </div>
                        
                </form>
            </div>
        </div>
    </div>
 </section>
<!-- ================================= end of register section =============================== -->

<?php 
    require_once('./script.php');
?>

</body>
</html>