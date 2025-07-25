<?php 
    $title = "Payment History";
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



            <div class="all-tables">
                    <div class="overview">
                        <h5>All Transaction</h5>
                    
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