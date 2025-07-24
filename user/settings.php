<?php 
    $title = "Settings";
    require_once('./header.php');
?>


<!-- =============================================== dashboard overview section =========================================== -->
 <section class="all-dashboard">
    <div class="dashboard-content">
        <?php 
            require_once('./dash-sidebar.php');
        ?>

        <div class="dashboard-right">
            <?php 
                require_once('./navbar.php');
            ?>
    <!-- ============================================== dash body ==================================================== -->
            <div class="all-dash-body">


            <!-- ============================================ setting section ========================================= -->
                                <section class="all-profile">
        
                                        <div class="profile-content mb-5 mt-3">
                                            <div class="profile-left">
                                                <img src="./assets/image/20250311_152604.jpg" alt="">
                                            </div>
                                            <div class="profile-right">
                                                <h5>John Thompson!</h5>
                                                <p>
                                                    <span>Upload a profile picture that represents you!</span>
                                                    <span>(<strong>Supported formats:</strong> Jpeg, Png, Jpg).</span>
                                                </p>
                                                <div class="edit-cta">
                                                    <button class="main-btn" data-bs-toggle="modal" data-bs-target="#editModal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                            <path stroke-linecap="round" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2" />
                                                            <path stroke-linecap="round" d="m2 12.5l1.752-1.533a2.3 2.3 0 0 1 3.14.105l4.29 4.29a2 2 0 0 0 2.564.222l.299-.21a3 3 0 0 1 3.731.225L21 18.5" opacity="0.5" />
                                                            <path d="m18.562 2.935l.417-.417a1.77 1.77 0 0 1 2.503 2.503l-.417.417m-2.503-2.503s.052.887.834 1.669s1.669.834 1.669.834m-2.503-2.503L14.727 6.77c-.26.26-.39.39-.5.533a3 3 0 0 0-.338.545c-.078.164-.136.338-.252.686l-.372 1.116m7.8-4.212L17.23 9.273c-.26.26-.39.39-.533.5a3 3 0 0 1-.545.338c-.164.078-.338.136-.686.252l-1.116.372m0 0l-.722.24a.477.477 0 0 1-.604-.603l.241-.722m1.085 1.085L13.265 9.65" />
                                                        </g>
                                                    </svg>Edit profile</button>
                                                </div>
                                            </div>
                                        </div>
                        
                                    <div class="line"></div>

                                    <div class="all-personal pt-4">
                                        <h4>Profile Details</h4>
                                        <div class="personal-content pt-4">
                                            <div class="personal-item">
                                                <h6>John</h6>
                                                <p>First Name</p>
                                            </div>
                                            <div class="personal-item">
                                                <h6>Thompson</h6>
                                                <p>Last Name</p>
                                            </div>
                                            <div class="personal-item">
                                                <h6>agwujohnama@gmail.com</h6>
                                                <p>Email</p>
                                            </div>
                                            <div class="personal-item">
                                                <h6>Nigeria</h6>
                                                <p>Country</p>
                                            </div>
                                            <div class="personal-item">
                                                <h6>+234-81077-23129</h6>
                                                <p>Phone Number</p>
                                            </div>
                                            <div class="personal-item">
                                                <h6>Grace villa, Ebonyi State.</h6>
                                                <p>Address</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
              <!-- ============================================ end of setting section ========================================= -->
                
                
            </div>

            <?php 
                require_once('./assets/modal/settings-modal.php');
                require_once('./footer.php');
            ?>
    <!-- ============================================== end of dash body ==================================================== -->

        </div>
    </div>
 </section>
<!-- =============================================== emd of dashboard overview section =========================================== -->
<?php 
    require_once('./script.php');
?>
</body>
</html>