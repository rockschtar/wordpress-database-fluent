<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\DataTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\FormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\SupressErrorsTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\TableTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereFormatTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\WhereTrait;

class Update implements ExecuteInterface {

    use SupressErrorsTrait;

    use TableTrait;

    use DataTrait;

    use FormatTrait;

    use WhereTrait;

    use WhereFormatTrait;

    /**
     * @return bool
     * @throws DatabaseException
     */
    public function execute() {
        global $wpdb;

        $wpdb->suppress_errors = true;

        $result = $wpdb->update($this->table, $this->data, $this->where, $this->format, $this->whereFormat);

        if ($result === false) {
            throw new DatabaseException($wpdb->last_error);
        }

        return true;
    }
}