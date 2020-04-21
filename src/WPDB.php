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

    /**
     * @return Insert
     */
    public static function insert(): Insert {
        return new Insert();
    }

    /**
     * @return Update
     */
    public static function update(): Update {
        return new Update();
    }

    /**
     * @return Delete
     */
    public static function delete(): Delete {
        return new Delete();
    }

    /**
     * @return GetResults
     */
    public static function results(): GetResults {
        return new GetResults();
    }

    /**
     * @return GetVar
     */
    public static function getVar(): GetVar {
        return new GetVar();
    }

    /**
     * @return Query
     */
    public static function query(): Query {
        return new Query;
    }

    /**
     * @return GetRow
     */
    public static function getRow(): GetRow {
        return new GetRow();
    }

}