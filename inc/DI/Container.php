<?php

namespace JobListingsTheme\DI;

use League\Container\Container as LeagueContainer;
use League\Container\ReflectionContainer;
use JobListingsTheme\Core\Theme_Setup;
use Reflection;

/**
 * Singleton Dependency Injection Container
 * 
 * This class wraps League\Container to manage service dependencies
 * throughout the theme. It manually tracks service classes and 
 * supports lazy instantiation with constructor injection.
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
        Theme_Setup::class,
    ];

    /**
     * Private constructor to enforce singleton pattern.
     * Initializes the League\Container and registers services.
     */
    private function __construct() {
        $this->container = new LeagueContainer();
        $this->container->delegate(new ReflectionContainer());
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
        $this->container->add( Theme_Setup::class )->addArgument( $this->container );
    }

    /**
     * Initialize all registered services.
     * Assumes each service has an init() method.
     */
    public function init_services(): void {
        foreach ( $this->services as $service ) {
            $this->container->get( $service )->init();
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
