<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\DataTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\FormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\TableTrait;

class Insert implements ExecuteInterface {

    use TableTrait;

    use DataTrait;

    use FormatTrait;

    /**
     * @return int
     * @throws DatabaseException
     */
    public function execute(): int {
        global $wpdb;

        $result = $wpdb->insert($this->table, $this->data, $this->format);

        if ($result === false) {
            throw new DatabaseException($wpdb->last_error);
        }

        return $wpdb->insert_id;
    }

}