<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait DataTrait {

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     * @return static
     */
    public function data(array $data): self {
        $this->data = $data;
        return $this;
    }

}