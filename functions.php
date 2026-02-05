<?php

if (!defined('ABSPATH')) {
    exit;
}

function cd_glucose_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'cd_glucose_theme_setup');

function cd_glucose_get_plan_page_url(): string
{
    $planPage = get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-plan.php',
        'number' => 1,
    ]);

    if (!empty($planPage)) {
        return get_permalink($planPage[0]->ID) ?: home_url('/');
    }

    $fallback = get_page_by_path('plan');

    if ($fallback instanceof WP_Post) {
        return get_permalink($fallback->ID) ?: home_url('/plan/');
    }

    return home_url('/plan/');
}

function cd_glucose_enqueue_assets(): void
{
    wp_enqueue_style(
        'cd-glucose-main-style',
        get_template_directory_uri() . '/css/style.css',
        [],
        filemtime(get_template_directory() . '/css/style.css')
    );

    if (is_front_page()) {
        wp_enqueue_script(
            'cd-glucose-home-script',
            get_template_directory_uri() . '/js/script.js',
            [],
            filemtime(get_template_directory() . '/js/script.js'),
            true
        );

        wp_localize_script('cd-glucose-home-script', 'cdTheme', [
            'planUrl' => cd_glucose_get_plan_page_url(),
        ]);
    }

    if (is_page_template('page-plan.php')) {
        wp_enqueue_script(
            'cd-glucose-plan-script',
            get_template_directory_uri() . '/js/plan.js',
            [],
            filemtime(get_template_directory() . '/js/plan.js'),
            true
        );

        wp_localize_script('cd-glucose-plan-script', 'cdTheme', [
            'homeUrl' => home_url('/'),
        ]);
    }
}
add_action('wp_enqueue_scripts', 'cd_glucose_enqueue_assets');
