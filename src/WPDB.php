<?php

namespace Rockschtar\WordPress\DatabaseFluent;

use Rockschtar\WordPress\DatabaseFluent\Fluent\Delete;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetResults;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetRow;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetVar;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Insert;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Query;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Update;

class WPDB
{
    public static function insert(?\wpdb $wpdb = null): Insert
    {
        return new Insert($wpdb);
    }

    public static function update(?\wpdb $wpdb = null): Update
    {
        return new Update($wpdb);
    }

    public static function delete(?\wpdb $wpdb = null): Delete
    {
        return new Delete($wpdb);
    }

    public static function results(?\wpdb $wpdb = null): GetResults
    {
        return new GetResults($wpdb);
    }

    public static function getVar(?\wpdb $wpdb = null): GetVar
    {
        return new GetVar($wpdb);
    }

    public static function query(?\wpdb $wpdb = null): Query
    {
        return new Query($wpdb);
    }

    public static function getRow(?\wpdb $wpdb = null): GetRow
    {
        return new GetRow($wpdb);
    }
}
