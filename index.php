<?php 
    require_once('./header.php');
    require_once('./fixed-navbar.php');
    require_once('./sidebar.php');
    require_once('./preloader.php');
    
?>



<!-- ====================================== hero section ============================================= -->
 <section class="all-hero">
    <?php 
        require_once('./navbar.php');
        
    ?>
    <div class="hero-content margin">
        <div class="hero-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            
            <h2>
                <span>Experience comfort,</span>
                <span>luxury, and</span>
                <span>unforgettable stays.</span>
            </h2>
            <div class="des">
                <p>
                    <span>Book your perfect escape in the heart of the city or by the beach – where</span>
                    <span>hospitality meets elegance.</span>
                </p>
            </div>
            <div class="hero-cta">
                <a href="./all-rooms">
                    <button class="view-room py-4">View Our Rooms</button>
                </a>
            </div>
            
        </div>
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

<!-- ======================================= room section ================================== -->
 <section class="all-room">
    <div class="room-header mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        <h6>OUR ROOMS</h6>
        <h1>Accomodation</h1>
    </div>
    <div class="room-content margin">
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/1.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Family Suite</h5>
                <p>
                    <span>2 Guests</span>
                    <span>35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>359</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/4.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Deluxe Room</h5>
                <p>
                    <span>2 Guests</span>
                    <span>35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>129</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/6.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Alpine Retreat</h5>
                <p>
                    <span>2 Guests</span>
                    <span>2 35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>499</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/2.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Summit Suite</h5>
                <p>
                    <span>2 Guests</span>
                    <span>2 35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>129</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/g_4.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Timber Haven</h5>
                <p>
                    <span>2 Guests</span>
                    <span>2 35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>199</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
        <div class="room-items" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="room-wrapper">
                <img src="./assets/image/3.webp" alt="">
            </div>
            <div class="room-title">
                <h5>Cliffside Chalet</h5>
                <p>
                    <span>2 Guests</span>
                    <span>2 35 Feets Size</span>
                    <span><i class="fa fa-dollar-sign"></i>349</span>
                </p>
            </div>
            <div class="room-cta">
                <a href="./login">
                    <button class="room-btn w-100">Book Now</button>
                </a>
            </div>
        </div>
    </div>
 </section>
<!-- ======================================= end of room section ================================== -->

<!-- ========================== team section ================================ -->
    <div class="all-team">
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



<!-- ============================================ we do section ============================================== -->
 <!-- <section class="features-wrapper">
    <div class="feature-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <p>NEED MORE HELP?</p>
        <h3>
            <span class="fs-2">Leading, Trusted. Enabling Growth.</span>
            
        </h3>
    </div>
  <div class="features-container margin">
    <div class="feature up" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
      <img src="./assets/image/need-sales-icon.png" alt="Payment Solution" />
      <h4>Sales</h4>
      <p>Get in touch with our sales team to learn more about our products/services and how they can benefit your business.</p>
      <a href="#">
        <button class="about-btn py-2" style="font-size: 13px;">Contact Sales</button>
      </a>
    </div>

    <div class="feature down">
      <img src="./assets/image/need-more-icon2.png" alt="Growth Business" />
      <h4>Help & Support</h4>
      <p>Find answers to frequently asked questions, troubleshooting guides, and contact information for support.</p>
      <a href="#">
        <button class="about-btn py-2" style="font-size: 13px;">Get Support</button>
      </a>
    </div>

    <div class="feature up" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
      <img src="./assets/image/need-more-icon-3.png" alt="Connected People" />
      <h4>Article & News</h4>
      <p>Stay up-to-date with the latest company news, and product updates. Read articles, and news stories from our experts.</p>
      <a href="#">
        <button class="about-btn py-2" style="font-size: 13px;">Read Article</button>
      </a>
    </div>
  </div>
 </section> -->

<!-- ============================================ end of we do section ============================================== -->




<?php 
    require_once('./footer.php');
    require_once('./script.php');
?>
</body>
</html>