<?php get_header(); ?>
<div class="popup">
    <img src="<?php echo get_template_directory_uri() . "/assets/imgs/logo-dark-large.png"; ?>" alt="FMG FZC logo" class="primary-logo">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-nav'
    ));
    ?>
    <p class="footer-copyright">© RMG FZC LIMITED</p>
</div>
<div class="wrapper">
    <section class="home-banner">
        <div class="home-banner__title">
            <h1 class="home-banner__heading">Welcome to RMG FZC</h1>
            <img src="<?php echo get_template_directory_uri() . "/assets/svgs/preview.svg"; ?>" alt="white dot with a horizontal line on the right">
        </div>
        <div class="home-banner__content">
            <p>Your Trusted Gold Bullion Dealer in Hong Kong SAR, China</p>
            <p>Providing investors around the world with seamless access to professional bullion markets.</p>
            <ul class="home-banner__actions">
                <li><a href="">sell gold</a></li>
                <li><a href="">buy gold</a></li>
                <li><a href="">store gold</a></li>
                <li><a href="">create account</a></li>
            </ul>
        </div>
    </section>
    <section class="home-intro">
        <h2>Introduction</h2>
        <p>At RMG FZC, <span class="text-golden">we provide investors around the world with seamless access to the professional bullion markets.</span> Whether you're looking to buy, sell, or store gold bullion, our services are designed to meet your needs with efficiency and reliability.</p>
        <div class="home-intro__items">
            <div class="home-intro__item">
                <div class="home-intro__item-content">
                    <h3 class="home-intro__item-heading">Secure & Accessible Storage</h3>
                    <p class="home-intro__item-description">Our professional-market vaults in Hong Kong are equipped with state-of-the-art security measures, ensuring your gold is stored safely</p>
                    <p class="home-intro__item-description">You can rest assured that your investments are in good hands. Additionally, our storage solutions are designed to be easily accessible, giving you peace of mind and full control over your assets.</p>
                    <a href="" class="home-intro__item-link">Buy Gold</a>
                </div>
                <img class="home-intro__item-image" src="<?php echo get_template_directory_uri() . "/assets/imgs/home-1.png"; ?>" alt="Golden spiral object">
            </div>
            <div class="home-intro__item">
                <img class="home-intro__item-image" src="<?php echo get_template_directory_uri() . "/assets/imgs/home-2.png"; ?>" alt="Golden dragon">
                <div class="home-intro__item-content">
                    <h3 class="home-intro__item-heading">Professionalism and Integrity</h3>
                    <p class="home-intro__item-description">At RMG FZC, we pride ourselves on our professionalism and integrity. We operate with the highest standards of transparency and ethical conduct, ensuring that your investments are managed with the utmost care and respect.</p>
                    <p class="home-intro__item-description">Our reputation as a trusted gold bullion dealer is built on our commitment to excellence and customer satisfaction.</p>
                    <a href="" class="home-intro__item-link">Buy Gold</a>
                </div>
            </div>
            <div class="home-intro__item">
                <div class="home-intro__item-content">
                    <h3 class="home-intro__item-heading">Professionalism and Integrity</h3>
                    <p class="home-intro__item-description">At RMG FZC, we pride ourselves on our professionalism and integrity. We operate with the highest standards of transparency and ethical conduct, ensuring that your investments are managed with the utmost care and respect.</p>
                    <p class="home-intro__item-description">Our reputation as a trusted gold bullion dealer is built on our commitment to excellence and customer satisfaction.</p>
                    <a href="" class="home-intro__item-link">Buy Gold</a>
                </div>
                <img class="home-intro__item-image" src="<?php echo get_template_directory_uri() . "/assets/imgs/home-3.png"; ?>" alt="Golden object resembling a homemade paper hat">
            </div>
        </div>
        <div class="home-intro__advs">
            <div class="home-intro__advs-item">Buying Gold Bullion</div>
            <div class="home-intro__advs-item">Selling Gold Bullion</div>
            <div class="home-intro__advs-item">Storing Gold Bullion</div>
            <div class="home-intro__advs-item">Expertise and Support</div>
        </div>
    </section>
    <section class="call-to-action">
        <div class="call-to-action__content">
            <img src="<?php echo get_template_directory_uri() . "/assets/imgs/contact-img.png"; ?>" alt="Rectangular golden bar" class="call-to-action__image">
            <h3 class="call-to-action__heading">Join RMG FZC Today</h3>
            <a href="" class="call-to-action__link">Contact us</a>
        </div>
    </section>
</div>
<?php get_footer(); ?>