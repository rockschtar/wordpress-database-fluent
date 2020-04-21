<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\OutputTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class GetRow implements ExecuteInterface {

    use QueryTrait;

    use OutputTrait;

    /**
     * @var int
     */
    protected $y = 0;

    /**
     * @param int $y Row to return. Indexed from 0.
     * @return GetRow
     */
    public function y(int $y): GetRow {
        $this->y = $y;
        return $this;
    }

    /**
     * @return array|null|object
     * @throws DatabaseException
     */
    public function execute() {
        global $wpdb;

        $result = $wpdb->get_row($this->getQuery(), $this->output, $this->y);

        if (!empty($wpdb->last_error)) {
            throw new DatabaseException($wpdb->last_error);
        }

        return $result;
    }
}