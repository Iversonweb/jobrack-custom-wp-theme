<?php

namespace JobListingsTheme\Core\Assets;

use JobListingsTheme\Core\Assets\Base_Assets;

class Editor extends Base_Assets {
    public function register(): void {
        add_action('enqueue_block_editor_assets', [$this, 'enqueue']);
    }

    public function enqueue(): void {
        wp_enqueue_style('job-editor', $this->asset_uri('css/editor.css'), [], null);
        wp_enqueue_style('job-shared', $this->asset_uri('css/style-shared.css'), [], null);
        wp_enqueue_style('job-custom-editor', $this->asset_uri('css/custom.css'), [], null);
    }
}