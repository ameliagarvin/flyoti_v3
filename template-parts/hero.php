<?php
declare(strict_types=1);
$theme_uri = get_template_directory_uri();
?>
<section class="hero" id="top">
    <div class="hero__media" aria-hidden="true">
        <img src="<?php echo esc_url($theme_uri . '/assets/images/435b36de96afa1d7a2a25f0ca57dc5823d7bb44d.png'); ?>" alt="Airplane wing at sunset">
        <img src="<?php echo esc_url($theme_uri . '/assets/images/76dbf4e999001c4bbbc0c4638c19861802006fa0.png'); ?>" alt="" class="hero__overlay hero__overlay--blend">
        <img src="<?php echo esc_url($theme_uri . '/assets/images/cbf99ac5f8a471706837141bbb635166a85c7f75.png'); ?>" alt="" class="hero__overlay hero__overlay--soft">
        <div class="hero__gradient"></div>
    </div>
    <div class="hero__content">
        <p class="hero__eyebrow">Premier Air Fulfillment</p>
        <h1>Where extraordinary <span>Journeys take flight!</span></h1>
        <p class="hero__lede">Canada's most distinguished boutique air department for cruise and luxury travel</p>
        <a class="button button--primary" href="#contact">Begin Your Journey</a>
    </div>
    <div class="hero__scroll" aria-hidden="true">
        <span></span>
    </div>
</section>
