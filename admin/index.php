<?php 
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

                <section class="all-bookings">
                    <div class="booking-content">
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12c0 1.6.376 3.112 1.043 4.453c.178.356.237.763.134 1.148l-.595 2.226a1.3 1.3 0 0 0 1.591 1.592l2.226-.596a1.63 1.63 0 0 1 1.149.133A9.96 9.96 0 0 0 12 22Z" />
                                        <path stroke-linecap="round" d="M12 15.333c1.105 0 2-.746 2-1.666S13.105 12 12 12s-2-.746-2-1.667c0-.92.895-1.666 2-1.666m0 6.666c-1.105 0-2-.746-2-1.666m2 1.666V16m0-8v.667m0 0c1.105 0 2 .746 2 1.666" opacity="0.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <label>Revenue</label>
                                <h2>$62,760</h2>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="12" cy="6" r="4" />
                                        <path stroke-linecap="round" d="M18 9c1.657 0 3-1.12 3-2.5S19.657 4 18 4M6 9C4.343 9 3 7.88 3 6.5S4.343 4 6 4" opacity="0.5" />
                                        <ellipse cx="12" cy="17" rx="6" ry="4" />
                                        <path stroke-linecap="round" d="M20 19c1.754-.385 3-1.359 3-2.5s-1.246-2.115-3-2.5M4 19c-1.754-.385-3-1.359-3-2.5s1.246-2.115 3-2.5" opacity="0.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <label>Visitor</label>
                                <h2>1200+</h2>
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
                                <label>Bookings</label>
                                <h2>10.63k</h2>
                            </div>
                        </div>
                        <div class="booking-item">
                            <div class="booking-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" d="M22 22H2" />
                                        <path d="M21 22V6c0-1.886 0-2.828-.586-3.414S18.886 2 17 2h-2c-1.886 0-2.828 0-3.414.586c-.472.471-.564 1.174-.582 2.414" opacity="0.5" />
                                        <path d="M15 22V9c0-1.886 0-2.828-.586-3.414S12.886 5 11 5H7c-1.886 0-2.828 0-3.414.586S3 7.114 3 9v13" />
                                        <path stroke-linecap="round" d="M9 22v-3" />
                                        <path stroke-linecap="round" d="M6 8h6m-6 3h6m-6 3h6" opacity="0.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="booking-title">
                                <label>Rooms</label>
                                <h2>34/344</h2>
                            </div>
                        </div>
                    </div>
                </section>
               

                <div class="all-tables mt-4">
                    <div class="overview">
                        <h6>Bookings</h6>
                        <a href="./all-visitors">See all</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover custom-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="airtime-check">
                                            <input type="checkbox">
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>CheckIn</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>CheckOut</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Proof</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Payment</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Amount</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>RoomNo</th>
                                    <th>
                                        <span><i class="fa-solid fa-i-cursor"></i></span>
                                    </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/image/20250311_152604.jpg" alt="">
                                            <label>John Thompson</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#walletModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/team/team2.jpg" alt="">
                                            <label>Emmanuel</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#pendingModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/team/team4.jpg" alt="">
                                            <label>Mirabel Smith</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#rejectModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/image/20250311_152604.jpg" alt="">
                                            <label>John Thompson</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#walletModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/team/team2.jpg" alt="">
                                            <label>Emmanuel</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#pendingModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
                                                    </g>
                                                </svg>
                                            </div>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="airtime-check mt-2">
                                            <input type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="user-identity">
                                            <img src="./assets/team/team4.jpg" alt="">
                                            <label>Mirabel Smith</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>02/06/2025</td>
                                    <td></td>
                                    <td>03/07/2025</td>
                                    <td></td>
                                    <td>
                                        Passport
                                    </td>
                                    <td></td>
                                    <td>Card</td>
                                    <td></td>
                                    <td>
                                        <div class="table-amount">
                                            <label>$</label>
                                            <label>500</label>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        Deluxe : A-0001
                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="all-action">
                                            <div class="action-icon" data-bs-toggle="modal" data-bs-target="#rejectModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M9 4.46A9.8 9.8 0 0 1 12 4c4.182 0 7.028 2.5 8.725 4.704C21.575 9.81 22 10.361 22 12c0 1.64-.425 2.191-1.275 3.296C19.028 17.5 16.182 20 12 20s-7.028-2.5-8.725-4.704C2.425 14.192 2 13.639 2 12c0-1.64.425-2.191 1.275-3.296A14.5 14.5 0 0 1 5 6.821" />
                                                        <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 22h4m12 0h-8m1.888-18.337l.742-.742a3.146 3.146 0 1 1 4.449 4.45l-.742.74m-4.449-4.448s.093 1.576 1.483 2.966s2.966 1.483 2.966 1.483m-4.449-4.45L7.071 10.48c-.462.462-.693.692-.891.947a5.2 5.2 0 0 0-.599.969c-.139.291-.242.601-.449 1.22l-.875 2.626m14.08-8.13L14.93 11.52m-3.41 3.41c-.462.462-.692.692-.947.891q-.451.352-.969.599c-.291.139-.601.242-1.22.448l-2.626.876m0 0l-.641.213a.848.848 0 0 1-1.073-1.073l.213-.641m1.501 1.5l-1.5-1.5" />
                                                </svg>
                                            </div>
                                            <div class="action-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" d="M20.5 6h-17m6 5l.5 5m4.5-5l-.5 5" />
                                                        <path d="M6.5 6h.11a2 2 0 0 0 1.83-1.32l.034-.103l.097-.291c.083-.249.125-.373.18-.479a1.5 1.5 0 0 1 1.094-.788C9.962 3 10.093 3 10.355 3h3.29c.262 0 .393 0 .51.019a1.5 1.5 0 0 1 1.094.788c.055.106.097.23.18.479l.097.291A2 2 0 0 0 17.5 6" />
                                                        <path stroke-linecap="round" d="M18.374 15.4c-.177 2.654-.266 3.981-1.131 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9m13.666 0l-.2 3" />
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
                require_once('./assets/modal/wallet-modal.php');
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