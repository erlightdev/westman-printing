<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Westman_Printing
 */

$westman_printing_logo_url     = get_template_directory_uri() . '/assets/westman-logo.png';
$westman_printing_footer_links = 'flex flex-col gap-3 text-base leading-6 text-gray-900 [&_a]:text-gray-900 [&_a]:no-underline [&_a]:transition-colors [&_a]:duration-200 [&_a:hover]:text-sky-700';
?>

<footer id="colophon" class="w-full bg-white px-4 pt-12 sm:px-6 sm:pt-14 md:px-8 lg:px-12 lg:pt-16 xl:px-20 2xl:px-[165px] 2xl:pt-[70px]">
	<div class="mx-auto flex w-full max-w-[1400px] flex-col gap-12 lg:gap-16 2xl:gap-[68px]">
		<div class="grid w-full grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-[minmax(0,1.15fr)_minmax(10rem,0.45fr)_minmax(18rem,0.85fr)] lg:gap-12 xl:gap-20 2xl:gap-28">
			<div class="flex flex-col items-start gap-6">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block w-[205px] max-w-full no-underline" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
					<img src="<?php echo esc_url($westman_printing_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-12 w-[205px] max-w-full object-contain object-left" />
				</a>

				<div class="flex w-full max-w-md flex-col gap-3 md:pl-6">
					<div class="flex flex-col gap-1">
						<div class="flex items-start gap-1">
							<svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="M4 20h16M6 20V8l6-4 6 4v12M9 20v-6h6v6M8 10h.01M16 10h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="truncate text-sm font-bold leading-5 text-gray-900"><?php esc_html_e('Visit Us', 'westman-printing'); ?></p>
						</div>
						<p class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('Between 8 am to 4 pm | From Monday to Friday', 'westman-printing'); ?></p>
					</div>

					<div class="flex flex-col gap-1">
						<div class="flex items-start gap-1">
							<svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="M12 21s7-4.7 7-11a7 7 0 1 0-14 0c0 6.3 7 11 7 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M12 10.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="truncate text-sm font-bold leading-5 text-gray-900"><?php esc_html_e('Location', 'westman-printing'); ?></p>
						</div>
						<p class="text-sm font-medium leading-5 text-gray-700"><?php esc_html_e('6/8 Priddle Street, Warwick Farm NSW 2170 (02) 9603 2599', 'westman-printing'); ?></p>
					</div>

					<div class="flex flex-col gap-1">
						<div class="flex items-start gap-1">
							<svg class="mt-0.5 size-5 shrink-0 text-gray-900" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="truncate text-base font-medium leading-6 text-gray-900"><?php esc_html_e('Email', 'westman-printing'); ?></p>
						</div>
						<a href="mailto:quotes@westmanprinting.com.au" class="break-words text-base font-medium leading-6 text-gray-700 no-underline transition-colors duration-200 hover:text-sky-700">quotes@westmanprinting.com.au</a>
					</div>
				</div>
			</div>

			<nav class="flex flex-col items-start gap-3" aria-label="<?php esc_attr_e('Footer Menu', 'westman-printing'); ?>">
				<h2 class="text-xl font-medium leading-6 text-gray-900"><?php esc_html_e('Quick Links', 'westman-printing'); ?></h2>
				<?php
				if (has_nav_menu('menu-2')) {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_class'     => $westman_printing_footer_links,
							'container'      => false,
							'depth'          => 1,
						)
					);
				} else {
				?>
					<ul class="<?php echo esc_attr($westman_printing_footer_links); ?>">
						<li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'westman-printing'); ?></a></li>
						<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'westman-printing'); ?></a></li>
						<li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'westman-printing'); ?></a></li>
						<li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blogs', 'westman-printing'); ?></a></li>
						<li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><?php esc_html_e('FAQ', 'westman-printing'); ?></a></li>
						<li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>"><?php esc_html_e('Contact Us', 'westman-printing'); ?></a></li>
					</ul>
				<?php
				}
				?>
			</nav>

			<div class="flex w-full max-w-[420px] flex-col items-start gap-5 md:col-span-2 lg:col-span-1">
				<div class="flex w-full flex-col gap-2.5">
					<h2 class="text-xl font-medium leading-7 text-gray-900"><?php esc_html_e('Stay in Touch', 'westman-printing'); ?></h2>
					<p class="text-sm leading-5 text-gray-700"><?php esc_html_e('Join our community and be the first to discover exciting new services, limited-time promotions, and expert tips to elevate your printing game.', 'westman-printing'); ?></p>
				</div>

				<form class="flex w-full flex-col items-start gap-3" action="<?php echo esc_url(home_url('/')); ?>" method="post">
					<label for="westman-footer-email" class="text-sm font-medium leading-4 text-gray-700"><?php esc_html_e('Email', 'westman-printing'); ?></label>
					<input id="westman-footer-email" name="westman-footer-email" type="email" autocomplete="email" placeholder="<?php esc_attr_e('Enter your email address', 'westman-printing'); ?>" class="h-9 w-full border-0 border-b border-slate-200 bg-transparent px-2 py-2 text-sm leading-4 text-gray-900 placeholder:text-gray-400 focus:border-sky-700 focus:ring-0" />
					<?php westman_printing_button(
array(
'tag'        => 'button',
'type'       => 'submit',
'text'       => __( 'Stay Connected', 'westman-printing' ),
'icon'       => true,
'class'      => 'mt-1 cursor-pointer py-1 pr-1 pl-4',
'aria_label' => __( 'Stay Connected', 'westman-printing' ),
)
); ?>
				</form>
			</div>
		</div>

		<div class="flex w-full flex-col items-center justify-between gap-5 border-t border-slate-100 py-6 text-center sm:py-8 md:flex-row md:flex-wrap md:text-left xl:flex-nowrap xl:py-[34px]">
			<p class="text-sm leading-5 text-gray-700"><?php esc_html_e('All Right Reserved | @2026 - Westman Printing Pvt. Ltd', 'westman-printing'); ?></p>

			<nav class="flex flex-wrap items-center justify-center gap-x-2 gap-y-1 text-base font-medium leading-6 text-gray-900" aria-label="<?php esc_attr_e('Legal Menu', 'westman-printing'); ?>">
				<a href="<?php echo esc_url(home_url('/terms/')); ?>" class="rounded-full px-3 py-2 text-gray-900 no-underline transition-colors duration-200 hover:text-sky-700"><?php esc_html_e('Terms', 'westman-printing'); ?></a>
				<a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="rounded-full px-3 py-2 text-gray-900 no-underline transition-colors duration-200 hover:text-sky-700"><?php esc_html_e('Privacy', 'westman-printing'); ?></a>
				<a href="<?php echo esc_url(home_url('/cookies/')); ?>" class="rounded-full px-3 py-2 text-gray-900 no-underline transition-colors duration-200 hover:text-sky-700"><?php esc_html_e('Cookies', 'westman-printing'); ?></a>
				<a href="<?php echo esc_url(home_url('/sitemap/')); ?>" class="rounded-full px-3 py-2 text-gray-900 no-underline transition-colors duration-200 hover:text-sky-700"><?php esc_html_e('Sitemap', 'westman-printing'); ?></a>
			</nav>

			<button type="button" class="flex items-center justify-center gap-2 rounded-full border border-gray-200 px-4 py-3 text-sm leading-5 text-gray-700 transition-colors duration-200 hover:border-sky-700 hover:text-sky-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#00669e] focus-visible:ring-offset-2" aria-label="<?php esc_attr_e('Language: English', 'westman-printing'); ?>">
				<span class="flex items-center gap-1">
					<svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
						<path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18ZM3 12h18M12 3c2.2 2.4 3.3 5.4 3.3 9S14.2 18.6 12 21M12 3C9.8 5.4 8.7 8.4 8.7 12S9.8 18.6 12 21" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<?php esc_html_e('English', 'westman-printing'); ?>
				</span>
				<svg class="size-4 shrink-0" viewBox="0 0 16 16" fill="none" aria-hidden="true">
					<path d="m4 6 4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
</footer><!-- #colophon -->