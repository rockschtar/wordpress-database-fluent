<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\OutputTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;

class GetResults extends Execute
{
    use QueryTrait;

    use OutputTrait;

    /**
     * @throws DatabaseException
     */
    public function execute(): ?array
    {

        $this->wpdb->last_error = '';
        $result = $this->wpdb->get_results($this->getQuery(), $this->output);
        if (!empty($this->wpdb->last_error)) {
            throw new DatabaseException($this->wpdb->last_error);
        }

        return $result;
    }
}
