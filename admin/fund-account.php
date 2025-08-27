<?php 
    $title = "Fund Account";
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
                            <h4><?= $title?></h4>

                            <form action="">
                                 <div class="airtime-input mb-3">
                                    <label for="amount">Amount to Deposit</label>
                                    <input type="number" required>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="network">Choose how you will pay</label>
                                    <select name="" id="" required>
                                        <option value="">--Select--</option>
                                        <option value="">ATM Card (Monnify 1.5%) - ₦100.00 to ₦9,500.00</option>
                                        <option value="">Cash Deposit or Mobile/Internet Bank Transfer (instant) - ₦100.00 to ₦5,000,000.00</option>
                                    </select>
                                </div>
                            
                                
                                <div class="airtime-cta">
                                    <a href="./account-details">
                                        <button type="button" class="pay-btn w-100 py-3">Click To Proceed</button>
                                    </a>
                                </div>
                            </form>
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