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
                 <section class="all-room-details pb-5">
                    <div class="room-details-content">
                        <div class="room-left">
                            <img src="./assets/image/pic22.jpg" alt="">
                        </div>
                        <div class="room-right">
                            <h2>Cozy Deluxe Room A-0001</h2>
                            <p>Our Cozy Deluxe Room is the epitome of comfort and sophistication, designed to provide a tranquil retreat after a long day of exploring.</p>
                            <p><strong>Bed type:</strong> Single Bed</p>
                            <p><strong>Room floor:</strong> Floor G-05</p>
                            <p><strong>Facilities</strong> AC, Shower, Double Bed, Towel, Bathup, Coffee Set, LED TV, Wifi</p>
                            <p><strong>Amount:</strong> ₦5,000.00</p>
                            <div class="room-cta">
                                <a href="./payment-details">
                                    <button class="pay-btn w-50 py-3">Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                 </section>

                 <div class="all-tables">
                    <div class="overview">
                        <h6>Available Rooms</h6>
                        <a href="">See all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover custom-table">
                            <thead>
                                <tr>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Room Name</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Bed Type</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Room Floor</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Room Facility</th>
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
                                    <td>
                                        <div class="table-name">
                                            <img src="./assets/image/pic11.jpg" alt="">
                                            <label>Cozy Deluxe Room A-0001</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Single Bed</td>
                                    <td></td>
                                    <td>Floor G-05</td>
                                    <td></td>
                                    <td>
                                        <div class="facility">
                                            <span>AC, Shower, Double Bed, Towel,</span>
                                            <span>Bathup, Coffee Set, LED TV, Wifi</span>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Available</span>
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
                                    <td>
                                        <div class="table-name">
                                            <img src="./assets/image/pic22.jpg" alt="">
                                            <label>#0011 Queen A-0011</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Double Bed</td>
                                    <td></td>
                                    <td>Floor G-11</td>
                                    <td></td>
                                    <td>
                                        <div class="facility">
                                            <span>AC, Shower, Double Bed, Towel,</span>
                                            <span>Bathup, Coffee Set, LED TV, Wifi</span>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Available</span>
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
                                    <td>
                                        <div class="table-name">
                                            <img src="./assets/image/pic11.jpg" alt="">
                                            <label>#0005 Queen A-0001</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Single Bed</td>
                                    <td></td>
                                    <td>Floor G-05</td>
                                    <td></td>
                                    <td>
                                        <div class="facility">
                                            <span>AC, Shower, Double Bed, Towel,</span>
                                            <span>Bathup, Coffee Set, LED TV, Wifi</span>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Available</span>
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
                                    <td>
                                        <div class="table-name">
                                            <img src="./assets/image/pic22.jpg" alt="">
                                            <label>#0011 Queen A-0011</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>Double Bed</td>
                                    <td></td>
                                    <td>Floor G-11</td>
                                    <td></td>
                                    <td>
                                        <div class="facility">
                                            <span>AC, Shower, Double Bed, Towel,</span>
                                            <span>Bathup, Coffee Set, LED TV, Wifi</span>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-success">Available</span>
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