<?php

namespace JobListingsTheme\Core\Assets;

use JobListingsTheme\Core\Assets\Base_Assets;

class Frontend extends Base_Assets {
    public function register(): void {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue(): void {
        wp_enqueue_style('job-style-shared', $this->asset_uri('css/style-shared.css'), [], null);
        wp_enqueue_style('job-custom', $this->asset_uri('css/custom.css'), [], null);

        wp_enqueue_script('jquery');
        wp_enqueue_script('popper', $this->asset_uri('js/popper.min.js'), ['jquery'], null, true);
        wp_enqueue_script('bootstrap', $this->asset_uri('js/bootstrap.min.js'), ['jquery', 'popper'], null, true);
        wp_enqueue_script('rangeslider', $this->asset_uri('js/rangeslider.js'), ['jquery'], null, true);
        wp_enqueue_script('nice-select', $this->asset_uri('js/jquery.nice-select.min.js'), ['jquery'], null, true);
        wp_enqueue_script('slick', $this->asset_uri('js/slick.js'), ['jquery'], null, true);
        wp_enqueue_script('counterup', $this->asset_uri('js/counterup.min.js'), ['jquery'], null, true);
    }
}