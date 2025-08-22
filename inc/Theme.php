<?php

namespace JobListingsTheme;

use JobListingsTheme\DI\Container;

/**
 * Main Theme bootstrap class.
 * 
 * Responsible for kicking off the entire theme logic.
 * Does not get registered inside the container.
 */
class Theme {
    /**
     * @var Container
     */
    protected Container $container;

    /**
     * Theme constructor.
     */
    public function __construct( Container $container ) {
        $this->container = $container;
    }

    /**
     * Bootstrap everything.
     */
    public function run(): void {
        $this->container->boot_services();
    }

    /**
     * Static entry point for bootstrapping the theme.
     */
    public static function bootstrap(): void {
		$theme = new self(Container::get_instance());
		$theme->run();
	}
}