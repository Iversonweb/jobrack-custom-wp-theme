<?php

namespace JobListingsTheme\Core;

use JobListingsTheme\Contracts\BootableInterface;
use JobListingsTheme\Core\Assets\Frontend;
use JobListingsTheme\Core\Assets\Editor;
use JobListingsTheme\Core\Assets\Cdn;

class Assets implements BootableInterface {
    public function boot(): void {
        (new Frontend())->register();
        (new Editor())->register();
        (new Cdn())->register();
    }
}