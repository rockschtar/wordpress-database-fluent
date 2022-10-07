<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait SupressErrorsTrait
{

    public function __construct()
    {
        global $wpdb;

        $wpdb->suppress_errors = true;
    }


}