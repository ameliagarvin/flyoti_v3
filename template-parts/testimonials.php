<?php
declare(strict_types=1);
$theme_uri = get_template_directory_uri();
$benefits = [
    'Book flights up to 11 months in advance',
    'No restrictions on carriers or routing',
    'Best seats at optimal prices',
    'Expert multi-continent itineraries',
    'Proactive schedule management',
    'Higher agent commissions',
    'Unparalleled client satisfaction',
    'Full flexibility for layovers',
    'Boutique-level personalized service',
    'Pre/post cruise flight planning',
];
$testimonials = [
    [
        'quote' => 'OTI transformed how I book travel for my clients. Their expertise in business class routing saved my clients thousands, and the proactive service during schedule changes was invaluable.',
        'name' => 'Margaret Richardson',
        'role' => 'Travel Advisor, Vancouver',
    ],
    [
        'quote' => 'After years of receiving tickets just 30 days before sailing with limited options, working with OTI was a revelation. We booked our flights 10 months early and saved significantly.',
        'name' => 'Robert & Patricia Jameson',
        'role' => 'World Cruise Enthusiasts',
    ],
    [
        'quote' => 'The level of service is extraordinary. My agent handled a complex itinerary involving four continents with precision. When our cruise departure was moved, they proactively rebooked everything.',
        'name' => 'Dr. Michael Chen',
        'role' => 'Frequent Luxury Traveler',
    ],
    [
        'quote' => 'As a travel agent, my reputation depends on seamless service. OTI consistently delivers. Higher commissions, exceptional client satisfaction, and peace of mind.',
        'name' => 'Linda Morrison',
        'role' => 'Luxury Travel Specialist, Toronto',
    ],
    [
        'quote' => 'What sets OTI apart is their deep knowledge of airline contracts and pricing. They found premium economy options at prices that made luxury travel affordable.',
        'name' => 'David Sullivan',
        'role' => 'Multi-Generational Cruise Planner',
    ],
];
?>
<section class="testimonials" id="testimonials">
    <div class="testimonials__difference">
        <div class="section-inner testimonials__difference-inner">
            <div class="testimonials__copy">
                <p class="section-eyebrow">The OTI Difference</p>
                <h2>Without Question,<br><span>Canada's Best</span></h2>
                <p class="section-subtitle">While some cruise companies only send tickets 30 days prior to departure with no say in carriers, OTI gives you complete control and flexibility from day one.</p>
                <div class="testimonials__benefits">
                    <?php foreach ($benefits as $benefit) : ?>
                        <div class="testimonials__benefit">
                            <span aria-hidden="true">✓</span>
                            <span><?php echo esc_html($benefit); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="button button--secondary" href="#contact">Speak to an Agent</a>
            </div>
            <div class="testimonials__images" aria-hidden="true">
                <div class="testimonials__image"><img src="<?php echo esc_url($theme_uri . '/assets/images/3c49a9e2f3d68282c073d81177b0d2de36521542.png'); ?>" alt="Scenic destination"></div>
                <div class="testimonials__image testimonials__image--offset"><img src="<?php echo esc_url($theme_uri . '/assets/images/a412e26f01786ce749a87b29a2a207c951a978a6.png'); ?>" alt="Ocean horizon"></div>
                <blockquote>"Travel agents and cruise customers return to book with us because OTI is the best boutique air department in Canada."</blockquote>
            </div>
        </div>
    </div>

    <div class="testimonials__list">
        <div class="section-inner">
            <div class="section-header section-header--center section-header--light">
                <p class="section-eyebrow">What Our Partners Say</p>
                <h2>Testimonials</h2>
                <p class="section-subtitle">From travel agents and discerning travelers who trust OTI</p>
            </div>
            <div class="testimonials__grid">
                <?php foreach ($testimonials as $testimonial) : ?>
                    <article class="testimonial-card">
                        <div class="testimonial-card__stars" aria-hidden="true">★★★★★</div>
                        <p>"<?php echo esc_html($testimonial['quote']); ?>"</p>
                        <footer>
                            <span><?php echo esc_html($testimonial['name']); ?></span>
                            <small><?php echo esc_html($testimonial['role']); ?></small>
                        </footer>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="testimonials__note">Join hundreds of satisfied clients who have discovered the OTI difference</p>
            <div class="testimonials__cta">
                <a class="button button--primary" href="#contact">Start Your Journey</a>
            </div>
        </div>
    </div>
</section>
