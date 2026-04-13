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
<main id="primary" class="site-main">
    <h1>Custom About Us</h1>
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
