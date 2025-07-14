
    <?php 
        $title = "Register";
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
                        <h4>Create Account</h4>
                        <p>Manage bills and payments with ease — sign up now.</p>
                    </div>
                    <div class="all-input">
                        <div class="register-group mb-3">
                            <input type="text" name="name"  placeholder=" " required>
                            <label for="first name">First Name</label>
                        </div>
                        <div class="register-group mb-3">
                            <input type="text" name="name" placeholder=" " required>
                            <label for="last name">Last Name</label>
                        </div>
                    </div>
                      <div class="register-group mb-3">
                          <input type="email" name="email" placeholder=" " required>
                          <label for="email">Enter Email</label>
                      </div>
                      <div class="pass mb-3">
                          <div class="pass-group">
                              <input id="password" type="password" name="password" placeholder=" " required>
                              <label for="password">Enter Password</label>
                          </div>
                          <span class="eye-icon"><i class="far fa-eye " onclick="togglePasswordVisibility()"></i></span>
                      </div>
                       <!-- <div class="register-group mb-3">
                          <select name="" id="" required>
                            <option value="" disabled selected></option>
                            <option value="">Nigeria</option>
                            <option value="">Korean</option>
                            <option value="">Ghana</option>
                            <option value="">China</option>
                            <option value="">Zambia</option>
                          </select>
                          <label for="country">Select Country</label>
                       </div> -->
                      <div class="terms mb-3">
                        <input type="checkbox">
                        <label>Agree with <span>Privacy Policy </span></label>
                      </div>
                       <div class="register-cta mb-3">
                            <a href="">
                                <button type="button" class="main-btn w-100">Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="currentColor" d="M5.47 17.47a.75.75 0 1 0 1.06 1.06zm1.06 1.06l12-12l-1.06-1.06l-12 12z" opacity="0.5" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 6h9v9" />
                                    </g>
                                </svg></button>
                            </a>
                        </div>
                        <div class="login-redirect">
                            <p>Already have an account? <a href="./login">Login</a></p>
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