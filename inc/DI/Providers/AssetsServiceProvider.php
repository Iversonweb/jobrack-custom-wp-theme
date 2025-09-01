<?php

namespace JobRackTheme\DI\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use JobRackTheme\Core\Assets\FrontendAssets;
use JobRackTheme\Core\Assets\EditorAssets;

class AssetsServiceProvider extends AbstractServiceProvider {
    
    /**
     * The services provided by this provider.
     *
     * @var array
     */
    protected array $provides = array(
        'JobRackTheme\\Core\\Assets\\FrontendAssets' => FrontendAssets::class,
        'JobRackTheme\\Core\\Assets\\EditorAssets' => EditorAssets::class,
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