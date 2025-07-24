<?php 
    $title = "My Wallet";
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


            <!-- ======================== balance section ============================ -->
             <section class="all-balance">
                <div class="balance-content">
                    <div class="balance-title">
                        <div class="balance-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3.378 5.082C3 5.62 3 7.22 3 10.417v1.574c0 5.638 4.239 8.375 6.899 9.536c.721.315 1.082.473 2.101.473c1.02 0 1.38-.158 2.101-.473C16.761 20.365 21 17.63 21 11.991v-1.574c0-3.198 0-4.797-.378-5.335c-.377-.537-1.88-1.052-4.887-2.081l-.573-.196C13.595 2.268 12.812 2 12 2s-1.595.268-3.162.805L8.265 3c-3.007 1.03-4.51 1.545-4.887 2.082M15.06 10.5a.75.75 0 0 0-1.12-.999l-3.011 3.374l-.87-.974a.75.75 0 0 0-1.118 1l1.428 1.6a.75.75 0 0 0 1.119 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <label>Available Balance</label>
                        <div class="balance-icon">
                            <i id="toggleBalance" class="far fa-eye"></i>
                        </div>
                    </div>
                    <div class="history">
                        <a href=""><label>Transaction History</label> <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                
                <div class="balance-amount">
                    <div class="amount">
                        <h4 id="balance">₦5,000.00</h4>
                    </div>
                    <div class="amount-cta">
                        <a href="./fund-account">
                            <button class="add-btn">+ Fund Account</button>
                        </a>
                    </div>
                </div>
             </section>
            <!-- ======================== end of balance section ============================ -->


            <div class="all-tables mt-4">
                    <div class="overview">
                        <h6>Transaction History</h6>
                        <a href="./payment-history">See all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover custom-table">
                            <thead>
                                <tr>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Name</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Date</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Amount</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Bank</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Status</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td></td>
                                    <td>John Thompson</td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>8900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Moniepoint</td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Successful</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td></td>
                                    <td>Favour Smith</td>
                                    <td></td>
                                    <td>02/04/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>5900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Opay</td>
                                    <td></td>
                                    <td>
                                        <span class="badge" style="background-color: #ff6600be;">Pending</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>John Thompson</td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>8900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Moniepoint</td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-danger">Reversed</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>John Thompson</td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>8900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Moniepoint</td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Successful</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td></td>
                                    <td>Favour Smith</td>
                                    <td></td>
                                    <td>02/04/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>5900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Opay</td>
                                    <td></td>
                                    <td>
                                        <span class="badge" style="background-color: #ff6600be;">Pending</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>John Thompson</td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>₦</label>
                                            <label>8900</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Moniepoint</td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-danger">Reversed</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>


                
                
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