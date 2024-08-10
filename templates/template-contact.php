<?php

/**
 * Template Name: Contact Us
 */

 $pods = pods('page', get_the_ID());
 $email = $pods->field('email');
 $address = $pods->field('address');
?>

<?php get_header(); ?>
<div class="wrapper">
    <section class="webform">
        <div class="webform-info">
            <h4 class="webform-info__heading">Contact Information</h4>
            <p class="webform-info__description">Say something to start a live chat!</p>
            <div class="webform-info__message webform-info__contact-data">
                <img src="<?php echo get_template_directory_uri() . "/assets/svgs/email.svg"; ?>" alt="email" class="webform-info__img">
                <a href="mailto:welcome@rmgfzc" target="_blank" class="webform-info__message-description"><?php echo $email ;?></a>
            </div>
            <div class="webform-info__address webform-info__contact-data">
                <img src="<?php echo get_template_directory_uri() . "/assets/svgs/location.svg"; ?>" alt="location" class="webform-info__img">
                <p class="webform-info__address-description"><?php echo $address ;?></p>
            </div>
        </div>
        <div class="webform-data">
            <div class="webform-data__title">
                <img src="<?php echo get_template_directory_uri() . "/assets/svgs/form-logo.svg"; ?>" alt="Logo" class="webform-data__title-img">
                <h4 class="webform-data__title-heading">We're Here to Help</h4>
            </div>
            <p class="webform-data__description">Whether you have questions about our services, need assistance with your account, or want to learn more about investing in gold bullion, our team is here to help. Get in touch with us through the contact information below</p>
            <?php echo do_shortcode('[contact-form-7 id="dde395e" title="Contact form 1"]'); ?>
        </div>
    </section>
    <section class="call-to-action">
        <div class="call-to-action__content">
            <img src="<?php echo get_template_directory_uri() . "/assets/imgs/contact-img.png"; ?>" alt="Rectangular golden bar" class="call-to-action__image">
            <h3 class="call-to-action__heading">Join RMG FZC Today</h3>
            <p class="call-to-action__description">Experience the benefits of investing in gold bullion with RMG FZC. Our commitment to expertise, professionalism, and exceptional service makes us the ideal choice for investors around the world. Start your journey with us today and take advantage of the professional bullion markets with ease.</p>
            <a href="" class="call-to-action__link">Start Now</a>
        </div>
    </section>
</div>
<?php get_footer(); ?>