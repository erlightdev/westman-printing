<?php

/**
 * Template Name: Contact Us
 * Template Post Type: page
 * Author: Prakash Nayak
 * Author URI: https://prakashnayak.com.np/
 *
 * @package westman-printing
 */
get_header();

$westman_printing_contact_map_url = get_template_directory_uri() . '/assets/contact-map.png';
?>
<main id="primary" class="site-main overflow-hidden">
    <!-- Page Hero Section -->
    <?php westman_printing_hero_section(
        array(
            'title'    => __('Contact Us', 'westman-printing'),
            'subtitle' => __('Your trusted partner for reliable, high-quality printing, packaging, and promotional solutions.', 'westman-printing'),
        )
    ); ?>
    <!-- End Page Hero Section -->
    <!-- Contact Form and Map Section -->
    <section class="px-4 pt-12 pb-24 sm:px-6 md:px-8 lg:px-12 xl:px-20 2xl:px-[165px]" aria-labelledby="contact-form-heading">
        <div class="mx-auto grid w-full max-w-[1400px] grid-cols-1 items-start gap-10 lg:grid-cols-2 lg:gap-6">
            <div class="flex w-full flex-col gap-10 lg:max-w-[670px] xl:max-w-none">
                <header class="flex max-w-[670px] flex-col gap-3">
                    <h2 id="contact-form-heading" class="text-3xl font-bold leading-tight tracking-normal text-gray-900">
                        <?php esc_html_e('Connect With Our Team', 'westman-printing'); ?>
                    </h2>
                    <p class="text-base leading-6 tracking-normal text-gray-700">
                        <?php esc_html_e('We usually respond in 12-24 hours. For urgent queries, call us 0296032588 or email us at Sales@cupsgalore.com.au', 'westman-printing'); ?>
                    </p>
                </header>

                <form class="flex w-full flex-col gap-6" action="<?php echo esc_url(home_url('/contact-us/')); ?>" method="post">
                    <div class="flex flex-col gap-3">
                        <label for="contact-full-name" class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('Full Name', 'westman-printing'); ?></label>
                        <input id="contact-full-name" name="full_name" type="text" autocomplete="name" placeholder="<?php esc_attr_e('Enter your full name', 'westman-printing'); ?>" class="h-9 w-full border-0 border-b border-slate-200 bg-transparent px-2 py-2 text-sm leading-5 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="contact-company" class="text-sm leading-5 text-gray-700"><?php esc_html_e('Company name', 'westman-printing'); ?></label>
                        <input id="contact-company" name="company" type="text" autocomplete="organization" placeholder="<?php esc_attr_e('Enter your company name', 'westman-printing'); ?>" class="h-9 w-full border-0 border-b border-gray-100 bg-transparent px-2 py-2 text-sm leading-5 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="contact-email" class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('Email', 'westman-printing'); ?></label>
                        <input id="contact-email" name="email" type="email" autocomplete="email" placeholder="<?php esc_attr_e('Enter your email address', 'westman-printing'); ?>" class="h-9 w-full border-0 border-b border-slate-200 bg-transparent px-2 py-2 text-sm leading-5 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="contact-phone" class="text-sm leading-5 text-gray-700"><?php esc_html_e('Contact Number', 'westman-printing'); ?></label>
                        <input id="contact-phone" name="phone" type="tel" autocomplete="tel" placeholder="<?php esc_attr_e('Contact Number', 'westman-printing'); ?>" class="h-9 w-full border-0 border-b border-slate-200 bg-transparent px-2 py-2 text-sm leading-5 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="contact-message" class="text-sm leading-5 text-gray-700"><?php esc_html_e('Message', 'westman-printing'); ?></label>
                        <textarea id="contact-message" name="message" rows="3" placeholder="<?php esc_attr_e('Enter Message here...', 'westman-printing'); ?>" class="min-h-20 w-full resize-y border-0 border-b border-gray-100 bg-transparent px-2 py-2 text-sm leading-5 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0"></textarea>
                    </div>

                    <fieldset class="flex flex-col gap-3">
                        <legend class="text-sm leading-5 text-gray-700"><?php esc_html_e('Do you consent to receiving our marketing emails from time to time?', 'westman-printing'); ?></legend>
                        <div class="flex items-center gap-6">
                            <label class="flex items-center gap-1 text-sm leading-5 text-gray-900">
                                <input type="radio" name="marketing_consent" value="no" checked class="size-4 border-gray-400 text-sky-800 focus:ring-sky-800" />
                                <?php esc_html_e('No', 'westman-printing'); ?>
                            </label>
                            <label class="flex items-center gap-1 text-sm leading-5 text-gray-300">
                                <input type="radio" name="marketing_consent" value="yes" class="size-4 border-gray-400 text-sky-800 focus:ring-sky-800" />
                                <?php esc_html_e('Yes', 'westman-printing'); ?>
                            </label>
                        </div>
                    </fieldset>

                    <div>
                        <?php
                        westman_printing_button(
                            [
                                'tag'        => 'button',
                                'type'       => 'submit',
                                'text'       => __('Send Now', 'westman-printing'),
                                'icon'       => true,
                                'class'      => 'cursor-pointer py-1 pr-1 pl-4',
                                'aria_label' => __('Send contact form', 'westman-printing'),
                            ]
                        );
                        ?>
                    </div>
                </form>
            </div>

            <aside class="flex w-full flex-col gap-8 lg:max-w-[720px]" aria-label="<?php esc_attr_e('Contact details', 'westman-printing'); ?>">
                <img src="<?php echo esc_url($westman_printing_contact_map_url); ?>" alt="<?php esc_attr_e('Map showing Westman Printing near Priddle Street, Warwick Farm', 'westman-printing'); ?>" width="1218" height="788" loading="lazy" decoding="async" class="aspect-[720/502] w-full rounded-xl object-cover" />

                <div class="flex flex-col gap-3 px-0 sm:px-6">
                    <div class="flex max-w-md flex-col gap-1">
                        <div class="flex items-start gap-1">
                            <svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 20h16M6 20V8l6-4 6 4v12M9 20v-6h6v6M8 10h.01M16 10h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h3 class="truncate text-base font-medium leading-6 text-gray-900"><?php esc_html_e('Visit Us', 'westman-printing'); ?></h3>
                        </div>
                        <p class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('Between 8 am to 4 pm | From Monday to Friday', 'westman-printing'); ?></p>
                    </div>

                    <address class="flex max-w-md flex-col gap-3 not-italic">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-start gap-1">
                                <svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 21s7-4.7 7-11a7 7 0 1 0-14 0c0 6.3 7 11 7 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 10.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="truncate text-base font-medium leading-6 text-gray-900"><?php esc_html_e('Location', 'westman-printing'); ?></h3>
                            </div>
                            <p class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('6/8 Priddle Street, Warwick Farm NSW 2170 (02) 9603 2599', 'westman-printing'); ?></p>
                        </div>

                        <div class="flex flex-col gap-1">
                            <div class="flex items-start gap-1">
                                <svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <h3 class="truncate text-base font-medium leading-6 text-gray-900"><?php esc_html_e('Email', 'westman-printing'); ?></h3>
                            </div>
                            <a href="mailto:quotes@westmanprinting.com.au" class="break-words text-base font-medium leading-6 text-gray-700 no-underline transition-colors duration-200 hover:text-sky-700">quotes@westmanprinting.com.au</a>
                        </div>
                    </address>
                </div>
            </aside>
        </div>
    </section>
    <!-- End Contact Form and Map Section -->
</main>

<?php
get_footer();
