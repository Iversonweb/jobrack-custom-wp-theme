<?php

namespace JobListingsTheme\Contracts;

interface BootableInterface {
    /**
     * Register the interface
     * 
     */
    public function boot(): void;
}