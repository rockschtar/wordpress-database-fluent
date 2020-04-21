<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait WhereTrait {

    protected $where = [];

    /**
     * @param array $where
     * @return static
     */
    public function where(array $where): self {
        $this->where = $where;
        return $this;
    }

}