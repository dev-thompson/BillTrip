<?php 
    $title = "Room Details";
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

                <!-- ========================================= room details section ========================================== -->

                 <div class="all-tables">
                    <div class="overview">
                        <h5>Payment Method</h5>
                        
                    </div>
                    <form action="">
                        <div class="all-payment">
                            <div class="payment-content mb-2">
                                <input type="radio" name="option-1">
                                <label>Wallet</label>
                            </div>
                            <div class="payment-content">
                                <input type="radio" name="option-1">
                                <label>Paystack</label>
                            </div>
                            
                            <div class="optional-payment py-3">
                                <div class="line"></div>
                                <label>OR</label>
                                <div class="line"></div>
                            </div>
                            <div class="all-credit-card">
                                <div class="credit-header">
                                    <label>Credit Card</label>
                                    <img src="./assets/image/price-payment-icon.png" alt="">
                                </div>
                                <div class="payment-description">
                                    <p class="payment-text">Safe Money Transfer using your bank account. Visa , Master Card , Discover , American Express. We adhere entirely to the data security standards of the payment card industry.</p>
                                    <div class="line my-4"></div>
                                    <div class="inner-input">
                                        <div class="payment-input mb-4">
                                            <label for="card number">Card Number</label>
                                            <input type="number" placeholder="0000 0000 0000 0000">
                                        </div>
                                        <div class="payment-double">
                                            <div class="payment-input mb-4">
                                                <label for="expiry date">Expiry Date</label>
                                                <input type="text" placeholder="mm-yyyy">
                                            </div>
                                            <div class="payment-input mb-4">
                                                <label for="cvc">CVC/CVV</label>
                                                <input type="number" placeholder="000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pay-cta py-3">
                                    <button type="button" class="pay-btn w-100 py-3">Pay Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ========================================= end of room details section ========================================== -->

                
                
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