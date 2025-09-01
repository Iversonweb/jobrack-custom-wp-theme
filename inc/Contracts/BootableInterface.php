<?php

namespace JobRackTheme\Contracts;

interface BootableInterface {
    /**
     * Register the interface
     * 
     */
    public function boot(): void;
}