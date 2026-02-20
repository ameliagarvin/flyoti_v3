<?php
declare(strict_types=1);

$faqs = [
    [
        'question' => 'What benefits do registered travel agents receive?',
        'answer' => 'Registered agents gain access to our exclusive booking engine, higher commission tiers, priority support for schedule changes, and dedicated account management.',
    ],
    [
        'question' => 'Can independent or home-based agents apply?',
        'answer' => 'Yes, independent and home-based agents are welcome to apply provided they have valid credentials (IATA/TICO/CLIA).',
    ],
    [
        'question' => 'Do I need an IATA or TICO number?',
        'answer' => 'Yes, a valid IATA, TICO, or equivalent industry identifier is required to register and book with OTI.',
    ],
];
?>
<section class="agent-center agent-center--faq" id="faq">
    <div class="section-inner">
        <div class="agent-center__faq">
            <div class="agent-center__heading">
                <h3>Frequently Asked Questions</h3>
                <span></span>
            </div>
            <div class="agent-center__list">
                <?php foreach ($faqs as $faq) : ?>
                    <details class="agent-center__item">
                        <summary><?php echo esc_html($faq['question']); ?></summary>
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
