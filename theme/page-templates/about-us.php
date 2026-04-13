<?php

/**
 * Template Name: About Us
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
    <?php westman_printing_hero_section(
        array(
            'title'    => __('About Us', 'westman-printing'),
            'subtitle' => __('Your trusted partner for reliable, high-quality printing, packaging, and promotional solutions.', 'westman-printing'),
        )
    ); ?>
    <!-- End Page Hero Section -->
    <section x-data="{ count: 0 }" class="space-y-4">
        <p>This is a custom about us page.</p>

        <div class="flex items-center gap-2">
            <button type="button" x-on:click="count--" class="px-3 py-2 bg-gray-200 rounded">-</button>
            <span x-text="count" class="text-xl font-bold">0</span>
            <button type="button" x-on:click="count++" class="px-3 py-2 bg-gray-200 rounded">+</button>
        </div>
    </section>
</main>



<?php
get_footer();
