<?php 
    $title = "All Rooms";
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
        <div class="about-hero margin">
            <h1>Our Rooms</h1>
            <p><a href="./">Home</a> | <label><?= $title?></label></p>
        </div>
 </section>
<!-- ====================================== end of hero section ============================================= -->


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

<?php 
    require_once('./footer.php');
    require_once('./script.php');
?>
</body>
</html>