<?php

namespace JobListingsTheme\DI;

use JobListingsTheme\Core\Assets;
use JobListingsTheme\Core\Assets\Frontend;
use JobListingsTheme\Core\Assets\Editor;
use JobListingsTheme\Core\Assets\Cdn;
use League\Container\Container as LeagueContainer;
use League\Container\ReflectionContainer;
use JobListingsTheme\Core\Theme_Setup;
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
     * Manually tracked list of service class names
     */
    private array $services = [
        Assets::class => [ 'bootable' => true ],
        Theme_Setup::class => [ 'bootable' => true ],
    ];

    /**
     * Private constructor to enforce singleton pattern.
     * Initializes the League\Container and registers services.
     */
    private function __construct() {
        $this->container = new LeagueContainer();
        $this->container->delegate(new ReflectionContainer(cacheResolutions: true));
        $this->register_services();
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
     * Register services with the container.
     * Add additional services and their dependencies here.
     */
    private function register_services(): void {
        foreach ( $this->services as $class => $config ) {
            $definition = $this->container->add($class);
    
            if ( ! empty($config['bootable']) ) {
                $definition->addTag('bootable');
            }
        }
    }

    /**
     * Boot all services that are tagged as 'bootable'.
     */
    public function boot_services(): void {
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