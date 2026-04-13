<?php

/**
 * Button component for the Westman Printing theme.
 *
 * @package Westman_Printing
 */

if (! function_exists('westman_printing_button')) :
    /**
     * Outputs a reusable button component.
     *
     * @param array $args {
     *     Button arguments.
     *
     *     @type string $tag           Tag name: 'a' or 'button'. Default 'a'.
     *     @type string $href          URL for anchor buttons.
     *     @type string $type          Button type attribute. Default 'button'.
     *     @type string $text          Button label.
     *     @type bool   $icon          Whether to render the default arrow icon.
     *     @type string $icon_position Icon placement: 'before' or 'after'. Default 'after'.
     *     @type string $class         Additional classes to append.
     *     @type array  $attrs         Additional HTML attributes.
     *     @type string $aria_label    Optional aria-label.
     *     @type bool   $echo          Whether to echo the HTML. Default true.
     * }
     */
    function westman_printing_button($args = array())
    {
        $args = wp_parse_args(
            $args,
            array(
                'tag'           => 'a',
                'href'          => '',
                'type'          => 'button',
                'text'          => '',
                'icon'          => false,
                'icon_position' => 'after',
                'class'         => '',
                'attrs'         => array(),
                'aria_label'    => '',
                'echo'          => true,
            )
        );

        $base_classes = 'group inline-flex items-center justify-center gap-2.5 rounded-full bg-[#00669e] py-2 px-4 text-base font-medium leading-snug text-white no-underline transition duration-200 hover:brightness-90 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#00669e] focus-visible:ring-offset-2';
        $classes      = trim($base_classes . ' ' . $args['class']);

        $attributes = '';
        if (! empty($args['aria_label'])) {
            $attributes .= ' aria-label="' . esc_attr($args['aria_label']) . '"';
        }

        if ('button' === $args['tag']) {
            $attributes .= ' type="' . esc_attr($args['type']) . '"';
        } elseif (! empty($args['href'])) {
            $attributes .= ' href="' . esc_url($args['href']) . '"';
        }

        foreach ($args['attrs'] as $name => $value) {
            $attributes .= ' ' . esc_attr($name) . '="' . esc_attr($value) . '"';
        }

        $icon_html = '';
        if ($args['icon']) {
            $icon_html = '<span class="relative flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-full bg-white/25">';
            $icon_html .= '<svg class="absolute h-5 w-5 transition-transform duration-300 ease-out group-hover:translate-x-full group-hover:-translate-y-full" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>';
            $icon_html .= '<svg class="absolute h-5 w-5 -translate-x-full translate-y-full transition-transform duration-300 ease-out group-hover:translate-x-0 group-hover:translate-y-0" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>';
            $icon_html .= '</span>';
        }

        $content = '';
        if ('before' === $args['icon_position']) {
            $content .= $icon_html;
        }
        $content .= '<span class="whitespace-nowrap">' . esc_html($args['text']) . '</span>';
        if ('after' === $args['icon_position']) {
            $content .= $icon_html;
        }

        $html = sprintf('<%1$s class="%2$s"%3$s>%4$s</%1$s>', esc_attr($args['tag']), esc_attr($classes), $attributes, $content);

        if ($args['echo']) {
            echo $html;
            return;
        }

        return $html;
    }
endif;
