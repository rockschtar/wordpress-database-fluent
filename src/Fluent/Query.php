<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class Query implements ExecuteInterface {

    use QueryTrait;

    /**
     * @return false|int
     * @throws DatabaseException
     */
    public function execute() {
        global $wpdb;

        $result = $wpdb->query($this->getQuery());

        if (!empty($wpdb->last_error)) {
            throw new DatabaseException($wpdb->last_error);
        }

        return $result;
    }
}