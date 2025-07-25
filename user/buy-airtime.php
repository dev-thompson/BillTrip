<?php 
    $title = "Buy Airtime";
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
                            <h4><?=$title?></h4>

                            <form action="">
                                <div class="airtime-input mb-3">
                                    <label for="balance">Payment Option</label>
                                    <input type="text" value="Wallet - ₦5,000.00" readonly>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="network">Mobile Network</label>
                                    <select name="" id="" required>
                                        <option value="">--Select--</option>
                                        <option value="">MTN</option>
                                        <option value="">Airtel</option>
                                        <option value="">Glo</option>
                                        <option value="">9mobile</option>
                                    </select>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="bonus">Mtn Bonus (400% Airtime Bonus)</label>
                                    <select name="" id="" required>
                                        <option value="">--Select--</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="airtime value">Airtime Value ( <span>50 - 200,000</span> )</label>
                                    <input type="number" required>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="number">Mobile Numbers ( <span>Enter one mobile number per line or separate with comma e.g. 09062547110, 08149659347</span> )</label>
                                    <textarea name="" id="" required></textarea>
                                </div>
                                 <div class="airtime-input mb-3">
                                    <label for="amount">Amount [ <span>2% Discount</span> ]</label>
                                    <input type="text" value="200.00" readonly required>
                                </div>
                                <div class="airtime-input mb-2">
                                    <label for="network">Auto Renew</label>
                                    <select name="" id="" required>
                                        <option value="">No</option>
                                        <option value="">Monthly</option>
                                        <option value="">Every 3 Weeks</option>
                                        <option value="">Every 2 Weeks</option>
                                        <option value="">Weekly</option>
                                        <option value="">Every 3 Days</option>
                                        <option value="">Daily</option>
                                    </select>
                                </div>
                                <div class="airtime-check mb-3">
                                    <input type="checkbox">
                                    <label>Bypass number validator</label>
                                </div>
                                <div class="airtime-cta">
                                    <a href="">
                                        <button type="button" class="pay-btn w-100 py-3">Buy Now</button>
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