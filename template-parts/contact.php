<?php
declare(strict_types=1);
$theme_uri = get_template_directory_uri();
$split_image = $theme_uri . '/assets/images/85e4bc635bc5400d814a63025c9a6c91aab3438d.png';
?>
<section class="contact" id="contact">
    <div class="contact__panel" style="--panel-image: url('<?php echo esc_url($split_image); ?>');">
        <div class="contact__content">
            <h2>Don't Have a<br>Travel Agent?</h2>
            <a class="button button--primary" href="#contact">Find One</a>
        </div>
    </div>
    <div class="contact__panel contact__panel--alt" style="--panel-image: url('<?php echo esc_url($split_image); ?>');">
        <div class="contact__content">
            <h2>Travel Agent?<br>Book For Your Client Here</h2>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/travel-agent-portal/')); ?>">Book Now</a>
        </div>
    </div>
</section>
