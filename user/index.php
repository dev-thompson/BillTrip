<?php 
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

                <section class="all-bookings">
                    <div class="booking-content">
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M21 16.09v-4.992c0-4.29 0-6.433-1.318-7.766C18.364 2 16.242 2 12 2S5.636 2 4.318 3.332S3 6.81 3 11.098v4.993c0 3.096 0 4.645.734 5.321c.35.323.792.526 1.263.58c.987.113 2.14-.907 4.445-2.946c1.02-.901 1.529-1.352 2.118-1.47c.29-.06.59-.06.88 0c.59.118 1.099.569 2.118 1.47c2.305 2.039 3.458 3.059 4.445 2.945c.47-.053.913-.256 1.263-.579c.734-.676.734-2.224.734-5.321Z" />
                                        <path stroke-linecap="round" d="M15 6H9" opacity="0.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <h2>860</h2>
                                <label>New Booking</label>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M2 12c0-3.771 0-5.657 1.172-6.828S6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172S22 8.229 22 12v2c0 3.771 0 5.657-1.172 6.828S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14z" />
                                        <path stroke-linecap="round" d="M18 16h-2m0 0h-2m2 0v-2m0 2v2" />
                                        <path stroke-linecap="round" d="M7 4V2.5M17 4V2.5M2 9h20" opacity="0.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <h2>250</h2>
                                <label>Schedule Room</label>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" d="M8 16c0 2.828 0 4.243.879 5.121C9.757 22 11.172 22 14 22h1c2.828 0 4.243 0 5.121-.879C21 20.243 21 18.828 21 16V8c0-2.828 0-4.243-.879-5.121C19.243 2 17.828 2 15 2h-1c-2.828 0-4.243 0-5.121.879C8 3.757 8 5.172 8 8" />
                                        <path d="M8 19.5c-2.357 0-3.536 0-4.268-.732C3 18.035 3 16.857 3 14.5v-5c0-2.357 0-3.536.732-4.268S5.643 4.5 8 4.5" opacity="0.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12h9m0 0l-2.5 2.5M15 12l-2.5-2.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <h2>52</h2>
                                <label>Check In</label>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" d="M8.002 7c.012-2.175.108-3.353.877-4.121C9.757 2 11.172 2 14 2h1c2.828 0 4.243 0 5.121.879C21 3.757 21 5.172 21 8v8c0 2.828 0 4.243-.879 5.121C19.243 22 17.828 22 15 22h-1c-2.828 0-4.243 0-5.121-.879c-.769-.768-.865-1.946-.877-4.121" />
                                        <path d="M8 19.5c-2.357 0-3.536 0-4.268-.732C3 18.035 3 16.857 3 14.5v-5c0-2.357 0-3.536.732-4.268S5.643 4.5 8 4.5" opacity="0.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H6m0 0l2 2m-2-2l2-2" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <h2>75</h2>
                                <label>Check Out</label>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="all-calendar mt-4">
                    <div class="booked-room-today">
                        <p>Booked Room Today</p>
                        <div class="outer-bar mb-4">
                            <div class="inner-bar"></div>
                        </div>
                        <div class="outer-bar mb-4">
                            <div class="inner-bar-1"></div>
                        </div>
                        <div class="outer-bar mb-3">
                            <div class="inner-bar-2"></div>
                        </div>
                        <div class="booked-display">
                            <div class="display-item-1">
                                <span><i class="fa fa-circle"></i> <label>Pending</label></span>
                                <h6>240</h6>
                            </div>
                            <div class="display-item-2">
                                <span><i class="fa fa-circle"></i> <label>Booked</label></span>
                                <h6>730</h6>
                            </div>
                            <div class="display-item-3">
                                <span><i class="fa fa-circle"></i> <label>Available</label></span>
                                <h6>150</h6>
                            </div>
                        </div>
                    </div>
                    <div id="source-calendar"></div>
                </div>

                <div class="all-tables mt-4">
                    <div class="overview">
                        <h6>All Rooms</h6>
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
                                            <a href="./room-details"><div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div></a>
                                            
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
                                        <span class="badge bg-danger">Booked</span>
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
                                        <span class="badge bg-danger">Booked</span>
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
                                        <span class="badge bg-danger">Booked</span>
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