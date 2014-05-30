<?php

/**
 * Manage configuration options.
 */
class WPCFM_CLI_Command extends WP_CLI_Command
{
    public $readwrite;


    function __construct() {
        $this->readwrite = new WPCFM_Readwrite();
    }


    /**
     * Push a bundle to the filesystem
     * 
     * ## OPTIONS
     * 
     * <bundle_name>
     * : The bundle name to export (or use "all")
     * 
     * ## EXAMPLES
     * 
     * wp config push bundle_name
     * 
     * @synopsis <bundle_name>
     * 
     */
    function push( $args, $assoc_args ) {
        $bundle_name = $args[0];
        $this->readwrite->push_bundle( $bundle_name );
        WP_CLI::success( 'The bundle has been written to file.' );
    }


    /**
     * Pull a bundle into the database
     * 
     * ## OPTIONS
     * 
     * <bundle_name>
     * : The bundle name to import (or use "all")
     * 
     * ## EXAMPLES
     * 
     * wp config pull bundle_name
     * 
     * @synopsis <bundle_name>
     * 
     */
    function pull( $args, $assoc_args ) {
        $bundle_name = $args[0];
        $this->readwrite->pull_bundle( $bundle_name );
        WP_CLI::success( 'The bundle has been pulled into the database.' );
    }
}

WP_CLI::add_command( 'config', 'WPCFM_CLI_Command' );
