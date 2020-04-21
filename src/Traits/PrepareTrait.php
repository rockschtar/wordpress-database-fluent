<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait PrepareTrait {

    protected $prepare = [];

    /**
     * @param array $prepare
     * @return PrepareTrait
     */
    public function prepare(array $prepare): PrepareTrait {
        $this->prepare = $prepare;
        return $this;
    }

}