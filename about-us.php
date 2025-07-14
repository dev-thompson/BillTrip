<?php 
    $title = "About Us";
    require_once('./header.php');
    require_once('./navbar.php');
    
?>



<!-- ====================================== hero section ============================================= -->
 <section class="all-hero-2">
    <div class="hero-content margin">
        <div class="about-hero-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <p>
                <span><a href="./">Home</a> | About</span>
            </p>
            <h1>About</h1>     
        </div>
        <div class="about-hero-right">
            <img src="./assets/image/banner-5.png" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        </div>
    </div>
 </section>
<!-- ====================================== end of hero section ============================================= -->


<!-- ====================================== about section ===================================== -->
 <section class="all-about">
    <p class="about">About <span>Pay</span>flo</p>
    <div class="about-content margin">
        <div class="about-left" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
            <img src="./assets/image/home-2-about-payment-img.jpg" alt="Background Image" class="img-back">
            <img src="./assets/image/home-2-about-t-img.jpg" alt="Foreground Image" class="img-front">
        </div>
        <div class="about-right">
            <div class="about-right-head" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <img width="130" src="./assets/image/home-2-about-content-img.png" alt="">
                <p> Simplifying bill payments, airtime recharge, and data subscriptions with ease and convenience.</p>
            </div>
            <div class="about-item mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <i class="far fa-folder-open"></i>
                <label>Navigate Our Platform With Ease</label>
            </div>
            <div class="about-item mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <i class="fa fa-user-shield"></i>
                <label>We Prioritize The Safety Of Your Financial Data.</label>
            </div>
            <div class="about-item mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <i class="fa fa-business-time"></i>
                <label>Connect With Loved Ones Or Businesses Globally.</label>
            </div>
            <div class="about-item mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <i class="fa fa-file-invoice-dollar"></i>
                <label>Access Your Financial Transactions Anytime, Anywhere</label>
            </div>
            <div class="contact-cta">
                <a href="">
                    <button class="about-btn w-50 py-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">Let's Talk</button>
                </a>
            </div>
        </div>
    </div>
 </section>
<!-- ====================================== end of about section ===================================== -->

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
                <img src="./assets/team/pay-2.avif" alt="Team Member 2"/>
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