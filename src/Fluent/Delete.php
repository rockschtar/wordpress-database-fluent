<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\TableTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereFormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereTrait;

class Delete extends Execute{

    use TableTrait;

    use WhereTrait;

    use WhereFormatTrait;

    /**
     * @throws DatabaseException
     */
    public function execute(): int|false {

        $result = $this->wpdb->delete($this->table, $this->where, $this->whereFormat);

        if ($result === false) {
            throw new DatabaseException($this->wpdb->last_error);
        }

        return $result;
    }
}
