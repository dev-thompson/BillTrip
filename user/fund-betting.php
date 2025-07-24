<?php 
    $title = "Fund Betting Wallet";
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
                                    <label for="network">Betting Company</label>
                                    <select name="" id="" required>
                                        <option value="">--Select--</option>
                                        <option value="bet9ja">Bet9ja</option>
                                        <option value="sportybet">SportyBet</option>
                                        <option value="1xbet">1xBet</option>
                                        <option value="betking">BetKing</option>
                                        <option value="nairabet">NairaBet</option>
                                        <option value="msport">MSport</option>
                                        <option value="bangbet">BangBet</option>
                                        <option value="betwinner">BetWinner</option>
                                        <option value="accessbet">AccessBet</option>
                                        <option value="betway">Betway</option>
                                    </select>
                                </div>
                                 <div class="airtime-input">
                                    <label for="amount">Customer ID</label>
                                    <input type="text" required>
                                </div>
                                <div class="verify-id mb-3">
                                    <label>Verifying Customer's ID</label>
                                </div>
                                 <div class="airtime-input mb-3">
                                    <label for="amount">Amount</label>
                                    <input type="number" required>
                                </div>
                                
                                <div class="airtime-cta">
                                    <a href="">
                                        <button type="button" class="pay-btn w-100 py-3">Fund Wallet</button>
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