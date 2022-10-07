<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\SupressErrorsTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\TableTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereFormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereTrait;

class Delete implements ExecuteInterface {

    use SupressErrorsTrait;

    use TableTrait;

    use WhereTrait;

    use WhereFormatTrait;

    /**
     * @return int
     * @throws DatabaseException
     */
    public function execute(): int {
        global $wpdb;

        $result = $wpdb->delete($this->table, $this->where, $this->whereFormat);

        if ($result === false) {
            throw new DatabaseException($wpdb->last_error);
        }

        return (int)$result;
    }
}