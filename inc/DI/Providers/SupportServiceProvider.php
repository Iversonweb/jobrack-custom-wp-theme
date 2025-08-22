<?php

namespace JobListingsTheme\DI\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use JobListingsTheme\Core\ThemeSupports;

class SupportServiceProvider extends AbstractServiceProvider {
    
    /**
     * The services provided by this provider.
     *
     * @var array
     */
    protected array $provides = array(
        'JobListingsTheme\\Core\\ThemeSupports' => ThemeSupports::class,
    );

    /**
     * @param string $id
     * @return bool
     */
    public function provides( string $id ): bool 
    {
        return array_key_exists( $id, $this->provides );
    }

    /**
     * Register the services.
     */
    public function register(): void {
        foreach ( $this->provides as $id => $class ) {
			$this->getContainer()
				->add( $id, $class )
				->setShared( true );
		}
    }
}