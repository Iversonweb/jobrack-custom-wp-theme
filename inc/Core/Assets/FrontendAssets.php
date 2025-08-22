<?php

namespace JobListingsTheme\Core\Assets;

use JobListingsTheme\Core\Assets\BaseAssets;
use JobListingsTheme\Contracts\BootableInterface;

class FrontendAssets extends BaseAssets implements BootableInterface {
    
    /**
     * Styles to register and enqueue.
     *
     * @var array[]
     */
    private array $styles = [
        [
            'handle' => 'jr-jost-css',
            'src'    => 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap',
            'deps'   => [],
            'ver'    => null,
            'media'  => 'all',
        ],
        [
            'handle' => 'job-style-shared',
            'src'    => 'css/style-shared.css',
            'deps'   => [],
            'ver'    => null,
            'media'  => 'all',
        ],
        [
            'handle' => 'job-custom',
            'src'    => 'css/custom.css',
            'deps'   => [],
            'ver'    => null,
            'media'  => 'all',
        ],
    ];

    /**
     * Scripts to register and enqueue.
     *
     * @var array[]
     */
    private array $scripts = [
        [
            'handle' => 'popper',
            'src'    => 'js/popper.min.js',
            'deps'   => [ 'jquery' ],
            'ver'    => null,
            'in_footer' => true,
        ],
        [
            'handle' => 'bootstrap',
            'src'    => 'js/bootstrap.min.js',
            'deps'   => [ 'jquery', 'popper' ],
            'ver'    => null,
            'in_footer' => true,
        ],
        [
            'handle' => 'rangeslider',
            'src'    => 'js/rangeslider.js',
            'deps'   => [ 'jquery' ],
            'ver'    => null,
            'in_footer' => true,
        ],
        [
            'handle' => 'nice-select',
            'src'    => 'js/jquery.nice-select.min.js',
            'deps'   => [ 'jquery' ],
            'ver'    => null,
            'in_footer' => true,
        ],
        [
            'handle' => 'slick',
            'src'    => 'js/slick.js',
            'deps'   => [ 'jquery' ],
            'ver'    => null,
            'in_footer' => true,
        ],
        [
            'handle' => 'counterup',
            'src'    => 'js/counterup.min.js',
            'deps'   => [ 'jquery' ],
            'ver'    => null,
            'in_footer' => true,
        ],
    ];

    /**
     * Bootstraps the theme by enqueuing scripts.
     */
    public function boot(): void 
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    /**
     * Enqueues all registered assets.
     */
    public function enqueue(): void {
        $this->register_styles();
        $this->register_scripts();

        foreach ( $this->styles as $style ) {
            wp_enqueue_style( $style['handle'] );
        }

        foreach ( $this->scripts as $script ) {
            wp_enqueue_script( $script['handle'] );
        }
    }

    /**
     * Registers styles from the $styles array.
     */
    private function register_styles(): void {
        foreach ( $this->styles as $style ) {
            $src = str_starts_with( $style['src'], 'http' )
                ? $style['src']
                : $this->asset_uri( $style['src'] );

            wp_register_style(
                $style['handle'],
                $src,
                $style['deps'],
                $style['ver'],
                $style['media']
            );
        }
    }

    /**
     * Registers scripts from the $scripts array.
     */
    private function register_scripts(): void {
        foreach ( $this->scripts as $script ) {
            $src = str_starts_with( $script['src'], 'http' )
                ? $script['src']
                : $this->asset_uri( $script['src'] );

            wp_register_script(
                $script['handle'],
                $src,
                $script['deps'],
                $script['ver'],
                $script['in_footer']
            );
        }
    }
}

