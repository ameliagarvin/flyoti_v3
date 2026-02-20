<?php
/* Template Name: Travel Agent Portal */
get_header();

$current_user = wp_get_current_user();
$is_logged_in = is_user_logged_in();
$is_agent    = in_array( 'um_travel_agent', (array) $current_user->roles );
$is_admin    = in_array( 'administrator', (array) $current_user->roles );
?>

<main class="site-main">

<?php if ( $is_logged_in ) : ?>
    <p>
        Logged in as <strong><?php echo esc_html( $current_user->display_name ); ?></strong>
        <?php if ( $is_agent ) : ?>
            <span class="agent-badge">Travel Agent</span>
        <?php endif; ?>
    </p>
<?php endif; ?>

<?php if ( ! $is_logged_in ) : ?>

    <h2>Travel Agent Login</h2>
    <?php echo do_shortcode('[ultimatemember form_id="7"]'); ?>

<?php elseif ( ! $is_agent && ! $is_admin ) : ?>

    <p>Sorry, this content is for Travel Agents only.</p>

<?php else : ?>

    <h2>Welcome to the Travel Agent Portal</h2>

    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>
