<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class Query extends Execute
{
    use QueryTrait;

    /**
     * @return false|int
     * @throws DatabaseException
     */
    public function execute(): false|int
    {

        $result = $this->wpdb->query($this->getQuery());

        if (!empty($this->wpdb->last_error)) {
            throw new DatabaseException($this->wpdb->last_error);
        }

        return $result;
    }
}
