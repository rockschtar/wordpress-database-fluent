<?php

namespace Rockschtar\WordPress\DatabaseFluent\Fluent;

use Rockschtar\WordPress\DatabaseFluent\Exceptions\DatabaseException;
use Rockschtar\WordPress\DatabaseFluent\Traits\QueryTrait;
use Rockschtar\WordPress\DatabaseFluent\Traits\SupressErrorsTrait;

class GetVar implements ExecuteInterface {

    use SupressErrorsTrait;

    use QueryTrait;

    /**
     * @var int
     */
    protected $x = 0;

    /**
     * @var int
     */
    protected $y = 0;

    /**
     * @param int $x Column of value to return. Indexed from 0.
     * @return GetVar
     */
    public function x(int $x): GetVar {
        $this->x = $x;
        return $this;
    }

    /**
     * @param int $y Row of value to return. Indexed from 0.
     * @return GetVar
     */
    public function y(int $y): GetVar {
        $this->y = $y;
        return $this;
    }

    public function execute(): ?string {
        global $wpdb;

        $result = $wpdb->get_var($this->getQuery(), $this->x, $this->y);

        if ($result === null) {
            throw new DatabaseException($wpdb->last_error);
        }

        return $result;
    }
}