<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

abstract class Execute
{
    protected \wpdb $wpdb;

    public function __construct(\wpdb $wpdb)
    {
        $this->wpdb = $wpdb;
    }


    abstract public function execute(): mixed;
}
