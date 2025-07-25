<?php 
    $title = "Account Details";
    require_once('./header.php');
    require_once('./sidebar.php');
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

                <!-- ============================ airtime section ===================================== -->
                 <section class="all-airtime">
                    <div class="airtime-content">
                        <div class="airtime-left">
                           

                            <div class="all-fund-details">
                                <p>
                                    <span>Pay into the account below</span>
                                    <span>your wallet will be funded automatically</span>
                                </p>
                                <div class="main-details mb-3">
                                    <h5>Account Details - <span>Fee: ₦31.18</span></h5>
                                    <p>(0.5% for transaction below ₦20,000.00 and ₦100.00 for transaction of ₦20,000.00 above)</p>
                                    <h5>Bank Name: <strong>MONIEPOINT MICROFINANCE BANK</strong></h5>
                                    <h5>Account Name: <strong>BillTrip - JOHN THOMPSON</strong></h5>
                                    <h5>Account Number: <strong>5567212398</strong></h5>
                                    <h5>Amount: <strong>₦5,800.00</strong></h5>
                                </div>
                            </div>
                            
                                
                                <div class="airtime-cta">
                                    <a href="./my-wallet">
                                        <button type="button" class="pay-btn w-100 py-3">My Wallet</button>
                                    </a>
                                </div>
                    
                        </div>
                          
                        <?php 
                            require_once('./quick-action.php');
                        ?>

                    </div>

                    
                 </section>
                <!-- ============================ end of airtime section ===================================== -->

                
                
            </div>

            <?php 
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