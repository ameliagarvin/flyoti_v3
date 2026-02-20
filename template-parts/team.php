<?php
declare(strict_types=1);

$team_query = new WP_Query([
    'post_type' => 'travel_agent',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => [
        'menu_order' => 'ASC',
        'date' => 'ASC',
    ],
]);

$members = [];

if ($team_query->have_posts()) {
    while ($team_query->have_posts()) {
        $team_query->the_post();
        $post_id = get_the_ID();

        $stats = [];


        if (empty($stats)) {
            $stats_meta = get_post_meta($post_id, 'team_stats', true);
            if (is_array($stats_meta)) {
                foreach ($stats_meta as $item) {
                    if (is_string($item) && $item !== '') {
                        $stats[] = $item;
                    }
                }
            }
        }

        $members[] = [
            'id' => (string) $post_id,
            'name' => get_the_title(),
            'role' => (string) get_post_meta($post_id, 'team_role', true),
            'specialization' => (string) get_post_meta($post_id, 'team_specialization', true),
            'bio' => has_excerpt($post_id) ? get_the_excerpt() : wp_strip_all_tags(get_the_content()),
            'details' => apply_filters('the_content', get_the_content()),
            'stats' => $stats,
        ];
    }

    wp_reset_postdata();
}
?>
<section class="team" id="team">
    <div class="section-inner">
        <div class="section-header section-header--center">
            <p class="section-eyebrow">Meet Our Team</p>
            <h2>Experienced Professionals at<br><span>Your Service</span></h2>
            <p class="section-subtitle">Work directly with seasoned professionals who deliver white glove service, cutting your costs and saving you valuable time.</p>
        </div>

        <?php if (!empty($members)) : ?>
            <div class="team__grid">
                <?php foreach ($members as $member) : ?>
                    <article class="team-card">
                        <h3><?php echo esc_html($member['name']); ?></h3>

                        <?php if ($member['role'] !== '') : ?>
                            <p class="team-card__role"><?php echo esc_html($member['role']); ?></p>
                        <?php endif; ?>

                        <?php if ($member['specialization'] !== '') : ?>
                            <p class="team-card__specialization"><?php echo esc_html($member['specialization']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($member['stats'])) : ?>
                            <ul>
                                <?php foreach ($member['stats'] as $stat) : ?>
                                    <li><?php echo esc_html($stat); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ($member['bio'] !== '') : ?>
                            <p class="team-card__bio"><?php echo esc_html($member['bio']); ?></p>
                        <?php endif; ?>

                        <div class="team-card__actions">
                            <a class="team-card__link" href="#team-<?php echo esc_attr($member['id']); ?>">Learn More</a>
                            <a class="button button--ghost" href="#contact">Contact</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p class="team__empty">No travel agents found. Add Travel Agent posts to populate this section.</p>
        <?php endif; ?>
    </div>

    <?php foreach ($members as $member) : ?>
        <div class="team-slideover" id="team-<?php echo esc_attr($member['id']); ?>">
            <a class="team-slideover__backdrop" href="#team" aria-label="Close"></a>
            <div class="team-slideover__panel">
                <a class="team-slideover__close" href="#team" aria-label="Close">×</a>
                <div class="team-slideover__content">
                    <h3><?php echo esc_html($member['name']); ?></h3>

                    <?php if ($member['role'] !== '') : ?>
                        <p class="team-slideover__role"><?php echo esc_html($member['role']); ?></p>
                    <?php endif; ?>

                    <?php if ($member['specialization'] !== '') : ?>
                        <p class="team-slideover__specialization"><?php echo esc_html($member['specialization']); ?></p>
                    <?php endif; ?>

                    <div class="team-slideover__text">
                        <?php echo $member['details']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>

                    <a class="button button--ghost" href="#contact">Contact</a>
                </div>
                <div class="team-slideover__image" aria-hidden="true"></div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
