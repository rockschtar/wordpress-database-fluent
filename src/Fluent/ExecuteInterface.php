<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;

interface ExecuteInterface {

    /**
     * @return mixed
     * @throws DatabaseException
     */
    public function execute();

}