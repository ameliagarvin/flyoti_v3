<?php
declare(strict_types=1);
$theme_uri = get_template_directory_uri();
?>
<section class="services" id="services">
    <div class="services__intro">
        <div class="section-inner services__intro-inner">
            <div class="services__copy">
                <p class="section-eyebrow">Where Excellence Takes Flight</p>
                <h2>Personalized Service for Discerning Travelers</h2>
                <div class="section-body">
                    <p>OTI has carved a unique niche in the Canadian travel industry by providing elite levels of personalized service to travel agents and travelers booking flights for their cruise and land tour packages.</p>
                    <p>For travelers who prefer their booking process to be initiated, compiled, and completed with the help of an experienced, elite travel professional—this is where OTI shines.</p>
                </div>
                <a class="button button--secondary" href="#contact">Speak to an Agent</a>
            </div>
            <div class="services__image">
                <img src="<?php echo esc_url($theme_uri . '/assets/images/d3eafd09c91f395cf200ef75fa36276696ac4a85.png'); ?>" alt="Airplane taking off">
                <span class="services__frame" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="services__grid">
        <div class="section-inner">
            <div class="section-header">
                <p class="section-eyebrow">Our Services</p>
                <h2>Comprehensive Air Solutions</h2>
                <p class="section-subtitle">Comprehensive air fulfillment solutions designed for the discerning traveler</p>
            </div>
            <div class="services__cards">
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">✈️</div>
                    <h3>Complex Itineraries</h3>
                    <p>Expert handling of multi-leg journeys across Europe, Asia, South America, and the South Pacific with precision and care.</p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">🛳️</div>
                    <h3>Cruise Air Packages</h3>
                    <p>Specialized flight arrangements perfectly timed with your cruise departures. Book up to 11 months in advance.</p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">💼</div>
                    <h3>Business &amp; Premium Economy Class</h3>
                    <p>Our expertise in premium cabin bookings makes upgraded travel more achievable than many think possible.</p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">🤝</div>
                    <h3>Personal Support</h3>
                    <p>A real person to talk to, listen, and solve problems. Not a search engine—a dedicated travel professional.</p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">📅</div>
                    <h3>Advance Booking</h3>
                    <p>Book flights up to 11 months ahead with no conditions on schedules or routes. Secure the best seats and prices.</p>
                </article>
                <article class="service-card">
                    <div class="service-card__icon" aria-hidden="true">🧭</div>
                    <h3>Crisis Management</h3>
                    <p>We handle schedule changes, cancellations, airline strikes, and unexpected disruptions with expertise and calm.</p>
                </article>
            </div>
            <div class="services__cta">
                <a class="button button--secondary" href="#contact">Speak to an Agent</a>
            </div>
        </div>
    </div>
</section>
