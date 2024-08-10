<?php

/**
 * Template Name: How It Works
 */
?>

<?php get_header(); ?>
<div class="wrapper">
    <section class="stages-banner">
        <h1 class="stages-banner__heading">Simplifying Your Gold Bullion Investment Journey</h1>
        <p class="stages-banner__description">At RMG FZC, we strive to make investing in gold bullion as straightforward and transparent as possible. Here, you'll find a step-by-step guide on how our process works and answers to frequently asked questions to help you navigate your investment with confidence.</p>
        <a href="" class="stages-banner__link">Get Started</a>
    </section>
    <section class="stages-main">
        <h2 class="stages-main__heading">How it works</h2>
        <div class="stages-main__items">
            <div class="stages-main__item">
                <div class="stages-main__item-header">
                    <div class="stages-main__item-digit">01</div>
                    <div class="stages-main__item-title">Create Your Account</div>
                </div>
                <p class="stages-main__item-description">Sign up on our website to create your RMG FZC account. Provide the necessary identification documents for verification.</p>
            </div>
            <div class="stages-main__item">
                <div class="stages-main__item-header">
                    <div class="stages-main__item-digit">02</div>
                    <div class="stages-main__item-title">Fund Your Account</div>
                </div>
                <p class="stages-main__item-description">Transfer funds to your RMG FZC account using your preferred payment method. Ensure your account is sufficiently funded to start purchasing gold bullion.</p>
            </div>
            <div class="stages-main__item">
                <div class="stages-main__item-header">
                    <div class="stages-main__item-digit">03</div>
                    <div class="stages-main__item-title">Buy Gold Bullion</div>
                </div>
                <p class="stages-main__item-description">Browse our selection of gold bars and choose the quantity you wish to purchase. Complete the transaction using your account funds. The gold will be securely stored in our professional-market vaults.</p>
            </div>
            <div class="stages-main__item">
                <div class="stages-main__item-header">
                    <div class="stages-main__item-digit">04</div>
                    <div class="stages-main__item-title">Store Your Gold</div>
                </div>
                <p class="stages-main__item-description">Your gold bullion is stored in our state-of-the-art vaults in Hong Kong. Benefit from our secure storage solutions and comprehensive insurance coverage.</p>
            </div>
            <div class="stages-main__item">
                <div class="stages-main__item-header">
                    <div class="stages-main__item-digit">05</div>
                    <div class="stages-main__item-title">Sell or Withdraw Your Gold</div>
                </div>
                <p class="stages-main__item-description">Sign up on our website to create your RMG FZC account. Provide the necessary identification documents for verification.</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . "/assets/imgs/howitworks-1.png"; ?>" alt="Rectangular golden bullion" class="stages-main__items-img">
        </div>
    </section>
    <section class="stages-faq">
        <h2 class="stages-faq__heading">Frequently asked questions</h2>
        <?php
        $pods = pods('page');

        $faqs = $pods->find(array(
            'limit' => -1 
        ));

        if ($faqs->total() > 0) : ?>
            <div class="stages-faq__items">
                <?php while ($faqs->fetch()): ?>
                    <?php
                    $questions = $faqs->field('question');
                    $answers = $faqs->field('answer');
                    ?>
                    <?php for ($i = 0; $i < count($questions); $i++): ?>
                    <div class="stages-faq__item">
                        <div class="stages-faq__item-title">
                            <div class="digit"><?php echo $i < 9 ? "0" . $i + 1 : $i + 1 ;?></div>
                            <h4><?php echo $questions[$i]; ?></h4>
                            <div class="stages-faq__item-svg toggle-faq">
                                <?php include get_template_directory() . "/assets/svgs/accordion-close.svg"; ?>
                            </div>
                        </div>
                        <div class="stages-faq__item-content">
                            <?php echo $answers[$i]; ?>
                        </div>
                    </div>
                    <?php endfor; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
</section>
</div>
<?php get_footer(); ?>