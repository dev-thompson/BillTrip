<?php 
    $title = "Pay Electricity";
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
                                    <label for="balance">Payment Option</label>
                                    <input type="text" value="Wallet - ₦5,000.00" readonly>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="network">Electricity Company</label>
                                    <select name="" id="">
                                        <option value="">--Select--</option>
                                        <option value="">Abuja Electricity Distribution Company (AEDC)</option>
                                        <option value="">Ebonyi Electricity Distribution Company (EEDC)</option>
                                        <option value="">Eko Electricity Distribution Company (EKEDC)</option>
                                        <option value="">Ibadan Electricity Distribution Company (IBEDC)</option>
                                        <option value="">Ikeja Electricity Distribution Company (IKEDC)</option>
                                        <option value="">Jos Electricity Distribution Company (JEDC)</option>
                                        <option value="">Kaduna Electricity Distribution Company (KAEDC)</option>
                                        <option value="">Kano Electricity Distribution Company (KEDC)</option>
                                        <option value="">Port Harcourt Electricity Distribution Company (PHEDC)</option>
                                        <option value="">Yola Electricity Distribution Company (YEDC)</option>
                                    </select>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="network">Meter Type</label>
                                    <select name="" id="">
                                        <option value="">--Select--</option>
                                        <option value="">Prepaid</option>
                                        <option value="">Postpaid</option>
                                    </select>
                                </div>
                                 <div class="airtime-input">
                                    <label for="amount">Meter Number</label>
                                    <input type="text">
                                </div>
                                <div class="verify-id mb-3">
                                    <label>Verifying Meter Number</label>
                                </div>
                                 <div class="airtime-input mb-3">
                                    <label for="amount">Amount</label>
                                    <input type="number">
                                </div>
                                
                                <div class="airtime-cta">
                                    <a href="">
                                        <button type="button" class="pay-btn w-100 py-3">Pay Now</button>
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