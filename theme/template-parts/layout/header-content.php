<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Westman_Printing
 */

// Define asset URLs and navigation classes once to keep the template clean.
// I've updated the class strings to use standard Tailwind utilities instead of arbitrary values.
$westman_printing_logo_url      = get_template_directory_uri() . '/assets/westman-logo.png';
$westman_printing_nav_classes   = 'flex flex-col gap-1 lg:flex-row lg:items-center lg:justify-center lg:gap-2 [&_a]:block [&_a]:rounded-full [&_a]:px-4 [&_a]:py-2 [&_a]:text-base [&_a]:font-normal [&_a]:leading-snug [&_a]:text-gray-800 [&_a]:no-underline [&_a]:transition-colors [&_a]:duration-200 [&_a:hover]:text-[var(--brand-color)] [&_.current-menu-item>a]:text-[var(--brand-color)]';
$westman_printing_mobile_nav_classes = $westman_printing_nav_classes . ' divide-y divide-gray-200 border-t border-gray-200 pt-3';
$Brand_Color = '#00669e';
// Reusable wp_nav_menu arguments to avoid repetition.
$westman_printing_nav_menu_args = array(
	'theme_location' => 'menu-1',
	'container'      => false,
	'depth'          => 1,
);

/**
 * Renders a fallback navigation menu if no menu is assigned in WordPress.
 *
 * @param array $args Arguments for the fallback menu (menu_id, menu_class).
 */
function westman_printing_the_fallback_menu($args)
{
?>
	<ul id="<?php echo esc_attr($args['menu_id']); ?>" class="<?php echo esc_attr($args['menu_class']); ?>" aria-label="submenu">
		<li class="current-menu-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'westman-printing'); ?></a></li>
		<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About Us', 'westman-printing'); ?></a></li>
		<li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'westman-printing'); ?></a></li>
		<li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blogs', 'westman-printing'); ?></a></li>
		<li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><?php esc_html_e('FAQ', 'westman-printing'); ?></a></li>
		<li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>"><?php esc_html_e('Contact Us', 'westman-printing'); ?></a></li>
	</ul>
<?php
}
?>

<!-- Added more responsive padding for a smoother transition across breakpoints -->
<header id="masthead" class="relative z-50 w-full px-4 py-3 sm:px-6 lg:px-8 border-b md:border-0 border-slate-300 md:border-none" style="--brand-color: <?php echo esc_attr($Brand_Color); ?>;" x-data="{ menuOpen: false }">
	<!-- Using a standard max-width container for better consistency on large screens -->
	<div class="relative mx-auto flex w-full max-w-7xl items-center gap-4">

		<!-- Main Header Bar -->
		<!-- Adjusted padding and min-height to use Tailwind's scale. `min-h-18` = 72px -->
		<div class="flex min-h-18 w-full flex-1 items-center justify-between rounded-full bg-white p-2 lg:shadow-sm lg:ring-1 lg:ring-black/5 md:p-3">

			<!-- Site Logo: Made the width responsive for smaller screens -->
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="flex h-12 w-40 shrink-0 items-center no-underline sm:w-44" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
				<img src="<?php echo esc_url($westman_printing_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-10 w-full object-contain object-left" />
			</a>

			<!-- Desktop Navigation -->
			<nav id="site-navigation" class="hidden min-w-0 flex-1 justify-center lg:flex" aria-label="<?php esc_attr_e('Main Navigation', 'westman-printing'); ?>">
				<?php
				if (has_nav_menu('menu-1')) {
					wp_nav_menu(
						array_merge(
							$westman_printing_nav_menu_args,
							array(
								'menu_id'    => 'primary-menu',
								'items_wrap' => '<ul id="%1$s" class="' . esc_attr($westman_printing_nav_classes) . '">%3$s</ul>',
							)
						)
					);
				} else {
					westman_printing_the_fallback_menu(
						array(
							'menu_id'    => 'primary-menu',
							'menu_class' => $westman_printing_nav_classes,
						)
					);
				}
				?>
			</nav>

			<!-- Mobile Menu Toggle Button: Replaced `size-*` with `h-* w-*` for clarity -->
			<button
				type="button"
				class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-[var(--brand-color)] text-white ring-1 ring-[var(--brand-color)]/10 transition duration-200 hover:brightness-90 focus:outline-none focus-visible:ring-2 focus-visible:ring-[var(--brand-color)] focus-visible:ring-offset-2 lg:hidden"
				aria-controls="mobile-menu-panel"
				:aria-expanded="menuOpen.toString()"
				@click="menuOpen = ! menuOpen">
				<span class="sr-only"><?php esc_html_e('Open primary menu', 'westman-printing'); ?></span>
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true" x-show="!menuOpen">
					<path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
				</svg>
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true" x-show="menuOpen" x-cloak>
					<path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
				</svg>
			</button>
		</div>

		<!-- Desktop "Request a Quotes" Button: Standardized font, line-height, and sizing -->
		<div class="hidden shrink-0 lg:block">
			<?php westman_printing_button(
				array(
					'tag'        => 'a',
					'href'       => home_url('/contact-us/'),
					'text'       => __('Request a Quotes', 'westman-printing'),
					'icon'       => true,
					'class'      => 'pl-4 pr-1',
					'aria_label' => __('Request a Quotes', 'westman-printing'),
				)
			); ?>
		</div>
	</div>

	<!-- Mobile Menu Panel (Slide Out) -->
	<div
		id="mobile-menu-panel"
		class="fixed inset-0 z-50 w-full overflow-y-auto bg-white p-4 lg:hidden"
		x-show="menuOpen"
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="translate-x-full"
		x-transition:enter-end="translate-x-0"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="translate-x-0"
		x-transition:leave-end="translate-x-full"
		x-cloak>
		<!-- Mobile Menu Header -->
		<div class="flex items-center justify-between pb-4">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="flex items-center gap-3 no-underline">
				<img src="<?php echo esc_url($westman_printing_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-10 object-contain" />
			</a>
			<button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-slate-100 text-slate-800 transition hover:bg-slate-200" @click="menuOpen = false">
				<span class="sr-only"><?php esc_html_e('Close menu', 'westman-printing'); ?></span>
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
				</svg>
			</button>
		</div>

		<!-- Mobile Navigation -->
		<nav aria-label="<?php esc_attr_e('Mobile Navigation', 'westman-printing'); ?>">
			<?php
			if (has_nav_menu('menu-1')) {
				wp_nav_menu(
					array_merge(
						$westman_printing_nav_menu_args,
						array(
							'menu_id'    => 'primary-menu-mobile',
							'items_wrap' => '<ul id="%1$s" class="' . esc_attr($westman_printing_mobile_nav_classes) . '">%3$s</ul>',
						)
					)
				);
			} else {
				westman_printing_the_fallback_menu(
					array(
						'menu_id'    => 'primary-menu-mobile',
						'menu_class' => $westman_printing_mobile_nav_classes,
					)
				);
			}
			?>
		</nav>

		<!-- Mobile "Request a Quotes" Button -->
		<a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="mt-6 flex items-center justify-between gap-2.5 rounded-full bg-[var(--brand-color)] py-3 px-5 text-base font-medium leading-snug text-white no-underline transition duration-200 hover:brightness-90 focus:outline-none focus-visible:ring-2 focus-visible:ring-[var(--brand-color)] focus-visible:ring-offset-2">
			<span class="whitespace-nowrap"><?php esc_html_e('Request a Quotes', 'westman-printing'); ?></span>
			<span class="flex h-10 w-10 items-center justify-center rounded-full bg-white/25">
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="M7 17 17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</a>
	</div>

	<!-- Backdrop for Mobile Menu -->
	<div
		class="fixed inset-0 z-40 bg-black/25 lg:hidden"
		x-show="menuOpen"
		x-transition:enter="transition-opacity ease-linear duration-300"
		x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100"
		x-transition:leave="transition-opacity ease-linear duration-300"
		x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0"
		@click="menuOpen = false"
		x-cloak></div>
</header><!-- #masthead -->