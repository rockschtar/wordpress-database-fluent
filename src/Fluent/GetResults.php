<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\OutputTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class GetResults implements ExecuteInterface {

    use QueryTrait;

    use OutputTrait;

    public function execute(): ?array {
        global $wpdb;
        $wpdb->last_error = '';
        $result = $wpdb->get_results($this->getQuery(), $this->output);
        if (!empty($wpdb->last_error)) {
            throw new DatabaseException($wpdb->last_error);
        }

        return $result;
    }
}