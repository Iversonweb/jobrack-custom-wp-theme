<?php

namespace JobRackTheme\Core\Assets;

use JobRackTheme\Core\Assets\BaseAssets;
use JobRackTheme\Contracts\BootableInterface;

class EditorAssets extends BaseAssets implements BootableInterface {
    
    /**
     * Fonts and styles to be enqueued in the block editor.
     *
     * @var array
     */
    protected array $styles = [
        [
            'handle' => 'job-editor',
            'src'    => 'css/editor.css',
            'deps'   => [],
            'ver'    => null,
            'local'  => true, // mark this as theme asset
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

