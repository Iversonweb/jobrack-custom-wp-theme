<?php

namespace JobListingsTheme\Core\Assets;

use JobListingsTheme\Core\Assets\BaseAssets;
use JobListingsTheme\Contracts\BootableInterface;

class EditorAssets extends BaseAssets implements BootableInterface {
    
    /**
     * Fonts and styles to be enqueued in the block editor.
     *
     * @var array
     */
    protected array $styles = [
        [
            'handle' => 'jr-jost-css',
            'src'    => 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap',
            'deps'   => [],
            'ver'    => null,
        ],
        [
            'handle' => 'job-editor',
            'src'    => 'css/editor.css',
            'deps'   => [],
            'ver'    => null,
            'local'  => true, // mark this as theme asset
        ],
        [
            'handle' => 'job-shared',
            'src'    => 'css/style-shared.css',
            'deps'   => [],
            'ver'    => null,
            'local'  => true,
        ],
        [
            'handle' => 'job-custom-editor',
            'src'    => 'css/custom.css',
            'deps'   => [],
            'ver'    => null,
            'local'  => true,
        ],
    ];

    /**
     * Bootstraps the theme editor by enqueuing editor scripts.
     */
    public function boot(): void {
        add_action('enqueue_block_assets', [$this, 'enqueue']);
    }

    /**
     * Enqueue block editor styles.
     */
    public function enqueue(): void {
        foreach ($this->styles as $style) {
            $src = ! empty($style['local'])
                ? $this->asset_uri($style['src'])
                : $style['src'];

            wp_enqueue_style(
                $style['handle'],
                $src,
                $style['deps'] ?? [],
                $style['ver'] ?? null
            );
        }
    }
}

