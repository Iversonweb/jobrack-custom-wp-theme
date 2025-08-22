<?php

namespace JobListingsTheme\DI;

use League\Container\Container as LeagueContainer;
use League\Container\ReflectionContainer;
use JobListingsTheme\DI\Providers\ServiceProvider;
use Reflection;

/**
 * Singleton Dependency Injection Container
 * 
 * This class wraps League\Container to manage service dependencies
 * throughout the theme. 
 */
class Container {
    /**
     * The singleton instance of this container.
     */
    private static ?self $instance = null;

     /**
     * The underlying League\Container instance.
     */
    private LeagueContainer $container;

    /**
     * Private constructor to enforce singleton pattern.
     * Initializes the League\Container and registers services.
     */
    private function __construct() {
        $this->container = new LeagueContainer();
        $this->container->delegate( new ReflectionContainer( cacheResolutions: true ) );
    }

    /**
     * Retrieve the singleton instance of the container.
     */
    public static function get_instance(): self {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Boot all services that are tagged as 'bootable'.
     */
    public function boot_services(): void {
        $this->container->addServiceProvider( new ServiceProvider() );
		foreach ($this->container->get('bootable') as $service) {
			if (method_exists($service, 'boot')) {
				$service->boot();
			}
		}
	}

    /**
     * Return the underlying League\Container instance.
     * Useful if you need to resolve or register other services directly.
     */
    public function get_container(): LeagueContainer {
        return $this->container;
    }
}