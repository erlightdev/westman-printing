<?php

/**
 * Global hero component for the Westman Printing theme.
 *
 * @package Westman_Printing
 */

if (! function_exists('westman_printing_hero_section')) :
    /**
     * Display a global page hero section.
     *
     * @param array $args {
     *     Arguments for the hero section.
     *
     *     @type string $title       Hero title. Default page title.
     *     @type string $subtitle    Hero subtitle text.
     *     @type array  $breadcrumbs Breadcrumb items as array of ['url' => '', 'label' => '']. Default home + title.
     *     @type string $classes     Additional wrapper classes.
     *     @type string $bg_classes  Background classes for the hero wrapper.
     * }
     */
    function westman_printing_hero_section($args = array())
    {
        global $post;

        $args = wp_parse_args(
            $args,
            array(
                'title'       => isset($post) ? get_the_title($post) : '',
                'subtitle'    => '',
                'breadcrumbs' => array(),
                'classes'     => '',
                'bg_classes'  => 'bg-gradient-to-br from-[#00669e] to-[#00375c]',
            )
        );

        if (empty($args['breadcrumbs'])) {
            $args['breadcrumbs'] = array(
                array(
                    'url'   => home_url('/'),
                    'label' => __('Home', 'westman-printing'),
                ),
                array(
                    'url'   => '',
                    'label' => $args['title'],
                ),
            );
        }

?>
        <section class="relative flex w-full items-center justify-center rounded-b-3xl px-4 pt-8 pb-11 sm:px-6 md:px-12 lg:-mt-24 lg:rounded-b-[42px] lg:px-12 lg:pt-40 lg:pb-16 xl:px-20 2xl:px-[165px] <?php echo esc_attr($args['bg_classes']); ?> <?php echo esc_attr($args['classes']); ?>">
            <div class="mx-auto flex w-full max-w-7xl pt-12 flex-col items-start gap-3 px-6">
                <nav class="flex items-center gap-2 text-sm font-normal leading-5 text-white sm:text-base sm:leading-6" aria-label="<?php esc_attr_e('Breadcrumb', 'westman-printing'); ?>">
                    <?php foreach ($args['breadcrumbs'] as $crumb) : ?>
                        <?php if (! empty($crumb['url'])) : ?>
                            <a href="<?php echo esc_url($crumb['url']); ?>" class="text-white no-underline transition-colors duration-200 hover:text-white/80"><?php echo esc_html($crumb['label']); ?></a>
                        <?php else : ?>
                            <span class="font-medium text-white"><?php echo esc_html($crumb['label']); ?></span>
                        <?php endif; ?>
                        <?php if (end($args['breadcrumbs']) !== $crumb) : ?>
                            <span class="text-xs font-light leading-4 text-white" aria-hidden="true">/</span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </nav>

                <h1 class="text-3xl font-bold leading-tight tracking-normal text-white sm:text-4xl lg:text-5xl"><?php echo esc_html($args['title']); ?></h1>

                <?php if ($args['subtitle']) : ?>
                    <p class="max-w-7xl text-sm font-normal leading-5 tracking-normal text-white sm:text-base sm:leading-6"><?php echo esc_html($args['subtitle']); ?></p>
                <?php endif; ?>
            </div>
        </section>
<?php
    }
endif;
