<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\DataTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\FormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\SupressErrorsTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\TableTrait;

class Insert extends Execute
{

    use TableTrait;

    use DataTrait;

    use FormatTrait;

    /**
     * @return int
     * @throws DatabaseException
     */
    public function execute(): int
    {
        $result = $this->wpdb->insert($this->table, $this->data, $this->format);

        if ($result === false) {
            throw new DatabaseException($this->wpdb->last_error);
        }

        return $this->wpdb->insert_id;
    }
}
