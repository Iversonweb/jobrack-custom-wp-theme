<?php

namespace JobListingsTheme\Core\Assets;

class Base_Assets {
    protected function asset_uri(string $path): string {
        return JOB_LISTINGS_THEME_URI . '/assets/' . ltrim($path, '/');
    }

    protected function asset_path(string $path): string {
        return JOB_LISTINGS_THEME_DIR . '/assets/' . ltrim($path, '/');
    }
}