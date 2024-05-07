<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

abstract class Execute
{
    protected \wpdb $wpdb;

    public function __construct(?\wpdb $wpdb = null)
    {
        if ($wpdb === null) {
            global $wpdb;
        }

        $wpdb->suppress_errors = true;

        $this->wpdb = $wpdb;
    }


    abstract public function execute(): mixed;
}
