<?php
/**
 * Job Listings Theme - Functions and definitions
 * 
 * @package JobListingsTheme
 */


if ( ! defined( 'ABSPATH' ) ) {
    die( 'Seems like you stumbled here by accident mate!' );
}

if ( file_exists ( __DIR__ . '/vendor/autoload.php' )) {
    require_once __DIR__ . '/vendor/autoload.php';
}

//Define theme constants
define ( 'JOB_LISTINGS_THEME_DIR', get_template_directory() );
define ( 'JOB_LISTINGS_THEME_URI', get_template_directory_uri() );


