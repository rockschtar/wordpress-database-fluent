<?php

namespace Rockschtar\WordPress\DatabaseFluent;

use Rockschtar\WordPress\DatabaseFluent\Fluent\Delete;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetResults;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetRow;
use Rockschtar\WordPress\DatabaseFluent\Fluent\GetVar;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Insert;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Query;
use Rockschtar\WordPress\DatabaseFluent\Fluent\Update;

class WPDB {


    protected static \wpdb $wpdb;

    private function __construct(?\wpdb $wpdb = null) {

        if($wpdb === null) {
            global $wpdb;
        }

        $wpdb->suppress_errors = true;

        self::$wpdb = $wpdb;
    }

    public static function wpdb(?\wpdb $wpdb): WPDB {
        return new WPDB($wpdb);
    }

    /**
     * @return Insert
     */
    public static function insert(): Insert {
        return new Insert(self::$wpdb);
    }

    /**
     * @return Update
     */
    public static function update(): Update {
        return new Update(self::$wpdb);
    }

    /**
     * @return Delete
     */
    public static function delete(): Delete {
        return new Delete(self::$wpdb);
    }

    /**
     * @return GetResults
     */
    public static function results(): GetResults {
        return new GetResults(self::$wpdb);
    }

    /**
     * @return GetVar
     */
    public static function getVar(): GetVar {
        return new GetVar(self::$wpdb);
    }

    /**
     * @return Query
     */
    public static function query(): Query {
        return new Query(self::$wpdb);
    }

    /**
     * @return GetRow
     */
    public static function getRow(): GetRow {
        return new GetRow(self::$wpdb);
    }

}
