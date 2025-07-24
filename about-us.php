<?php 
    $title = "About Us";
    require_once('./header.php');
    require_once('./fixed-navbar.php');
    require_once('./sidebar.php');
    
?>



<!-- ====================================== hero section ============================================= -->
 <section class="all-hero">
    <?php 
        require_once('./navbar.php');
        
    ?>
        <div class="about-hero margin">
            <h1>About US</h1>
            <p><a href="./">Home</a> | <label><?= $title?></label></p>
        </div>
 </section>
<!-- ====================================== end of hero section ============================================= -->

<!-- ================================================ about section ================================== -->
 <section class="all-about">
    <div class="about-content margin">
        <div class="about-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h1>Our History</h1>
            <p>From the moment you arrive, our dedicated team is committed to providing personalized service designed to make you feel at home. Whether you're traveling for business or leisure, our carefully designed rooms and suites offer a relaxing escape, complete with plush bedding, high-speed Wi-Fi, and stunning city or ocean views.</p>
            <p>Indulge in culinary delights at our on-site restaurant, unwind at our rooftop lounge, or recharge in our fully equipped fitness center. With state-of-the-art conference facilities and flexible event spaces, we’re also the perfect choice for meetings, weddings, and special occasions.</p>
        </div>
        <div class="about-right">
            <div class="about-image">
                <img src="./assets/image/hotel-about.jpg" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            </div>
            <div id="counters" class="hotel-details mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="hotel-item">
                    <h1 id="counter1">0</h1>
                    <p>Hotel Rooms</p>
                </div>
                <div class="hotel-item">
                    <h1 id="counter2">0</h1>
                    <p>Activities</p>
                </div>
                <div class="hotel-item">
                    <h1 id="counter3">0</h1>
                    <p>Restaurants</p>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ================================================ end of about section ================================== -->

<!-- ======================================== regions section ============================================= -->
 <section class="all-region">
    <div class="region-content margin">
        <div class="region-left">
            <h1>The Grand Regions</h1>
            <div class="region-image">
                <img src="./assets/image/room-4.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <img class="float-image" src="./assets/image/room-1.avif" alt="">
            </div>
        </div>
        <div class="region-right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <p>At our hotel, we offer more than just a place to stay — we deliver a complete hospitality experience designed around your comfort, convenience, and satisfaction. From the moment you arrive, our 24/7 concierge service is available to handle everything from personalized guest requests to travel arrangements and local recommendations. Our elegantly designed rooms and suites provide a perfect blend of modern luxury and timeless comfort, featuring plush bedding, high-speed Wi-Fi, smart entertainment, and stunning city or landscape views.
            Guests are invited to indulge in unforgettable dining experiences at our signature restaurant, where international cuisine meets local flavors, or relax with handcrafted cocktails at the rooftop lounge offering panoramic city views.</p>
            <div class="region-cta">
                <a href="./login">
                    <button class="view-room py-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">Book Now</button>
                </a>
            </div>
        </div>
    </div>
 </section>
<!-- ======================================== end of regions section ============================================= -->

<!-- ========================== team section ================================ -->
    <div class="all-team py-5">
        <div class="feature-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <p class="fs-3">Our Team</p>
            
        </div>

        <div class="carousel-container">
        <button class="nav-arrow left"><i class="fa fa-chevron-left"></i></button>
        <div class="carousel-track">
            <div class="card" data-index="0">
                <img src="./assets/team/ceo.jpg" alt="Team Member 1"/>
            </div>
            <div class="card" data-index="1">
                <img src="./assets/team/pay-7.jpg" alt="Team Member 2"/>
            </div>
            <div class="card" data-index="2">
                <img src="./assets/team/pay-3.avif" alt="Team Member 3"/>
            </div>
            <div class="card" data-index="3">
                <img src="./assets/team/pay-4.avif" alt="Team Member 4"/>
            </div>
            <div class="card" data-index="4">
                <img src="./assets/team/pay-5.avif" alt="Team Member 5"/>
            </div>
            <div class="card" data-index="5">
                <img src="./assets/team/pay-6.avif" alt="Team Member 6"/>
            </div>
        </div>
        <button class="nav-arrow right"><i class="fa fa-chevron-right"></i></button>
        </div>

        <div class="member-info">
        <h2 class="member-name">Jo Nh</h2>
        <p class="member-role">Founder</p>
        </div>

        <div class="dots">
        <div class="dot active" data-index="0"></div>
        <div class="dot" data-index="1"></div>
        <div class="dot" data-index="2"></div>
        <div class="dot" data-index="3"></div>
        <div class="dot" data-index="4"></div>
        <div class="dot" data-index="5"></div>
        </div>
    </div>
<!-- ========================== end of team section ================================ -->





<?php 
    require_once('./footer.php');
    require_once('./script.php');
?>
</body>
</html>