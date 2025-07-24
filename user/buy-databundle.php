<?php 
    $title = "Buy Databundle";
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
                                    <label for="bonus">Databundle Plan</label>
                                    <select name="" id="" required>
                                        <option value="">--Select--</option>
                                        <option value="500MB">500 MB – ₦120 (30 days)</option>
                                        <option value="1GB">1 GB – ₦210 (30 days)</option>
                                        <option value="2GB">2 GB – ₦420 (30 days)</option>
                                        <option value="5GB">5 GB – ₦1,050 (30 days)</option>
                                        <option value="10GB">10 GB – ₦2,100 (30 days)</option>
                                        <option value="15GB">15 GB – ₦3,150 (30 days)</option>
                                        <option value="20GB">20 GB – ₦4,200 (30 days)</option>
                                        <option value="25GB">25 GB – ₦5,250 (30 days)</option>
                                        <option value="30GB">30 GB – ₦6,300 (30 days)</option>
                                        <option value="40GB">40 GB – ₦8,400 (30 days)</option>
                                        <option value="50GB">50 GB – ₦10,500 (30 days)</option>
                                        <option value="60GB">60 GB – ₦12,600 (30 days)</option>
                                        <option value="70GB">70 GB – ₦14,700 (30 days)</option>
                                        <option value="80GB">80 GB – ₦16,800 (30 days)</option>
                                        <option value="90GB">90 GB – ₦18,900 (30 days)</option>
                                        <option value="100GB">100 GB – ₦21,000 (30 days)</option>
                                    </select>
                                </div>
                                <div class="airtime-input mb-3">
                                    <label for="number">Mobile Numbers ( <span>Enter one mobile number per line or separate with comma e.g. 09062547110, 08149659347</span> )</label>
                                    <textarea name="" id="" required></textarea>
                                </div>
                                 <div class="airtime-input mb-3">
                                    <label for="amount">Amount [ <span>2% Discount</span> ]</label>
                                    <input type="text" value="500.00" readonly required>
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