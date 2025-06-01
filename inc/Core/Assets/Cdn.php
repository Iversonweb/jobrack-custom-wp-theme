<?php

namespace JobListingsTheme\Core\Assets;

class Cdn {
    public function register(): void {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
        add_action('enqueue_block_editor_assets', [$this, 'enqueue']);
    }

    public function enqueue(): void {
        wp_enqueue_style(
            'job-fonts',
            'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap',
            [],
            null
        );
    }
}