<?php

/**
 * Template Name: Services Main
 * Template Post Type: page
 * Author: Prakash Nayak
 * Author URI: https://prakashnayak.com.np/
 *
 * @package westman-printing
 */
get_header();
?>
<main id="primary" class="site-main overflow-hidden">
    <!-- Page Hero Section -->
    <section>
        <?php westman_printing_hero_section(
            array(
                'title'    => __('Services', 'westman-printing'),
                'subtitle' => __('Your trusted partner for reliable, high-quality printing, packaging, and promotional solutions.', 'westman-printing'),
            )
        ); ?>
    </section>
    <!-- End Page Hero Section -->
</main>

<?php
get_footer();
