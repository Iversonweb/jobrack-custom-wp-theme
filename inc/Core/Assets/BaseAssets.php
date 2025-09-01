<?php

namespace JobRackTheme\Core\Assets;

class BaseAssets {
    protected function asset_uri(string $path): string {
        return JOB_RACK_THEME_URI . '/assets/' . ltrim($path, '/');
    }

    protected function asset_path(string $path): string {
        return JOB_RACK_THEME_DIR . '/assets/' . ltrim($path, '/');
    }
}