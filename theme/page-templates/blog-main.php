<?php

/**
 * Template Name: Blog Main
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
                'title'    => __('Blog', 'westman-printing'),
                'subtitle' => __('Latest news and updates from our team.', 'westman-printing'),
            )
        ); ?>
    </section>
    <!-- End Page Hero Section -->
</main>

<?php
get_footer();
