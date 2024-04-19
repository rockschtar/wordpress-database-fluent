<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\OutputTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class GetRow extends Execute
{
    use QueryTrait;

    use OutputTrait;

    protected int $y = 0;

    /**
     * @param int $y Row to return. Indexed from 0.
     * @return GetRow
     */
    public function y(int $y): GetRow
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @throws DatabaseException
     */
    public function execute(): array|null|object
    {
        $result = $this->wpdb->get_row($this->getQuery(), $this->output, $this->y);

        if (!empty($this->wpdb->last_error)) {
            throw new DatabaseException($this->wpdb->last_error);
        }

        return $result;
    }
}
