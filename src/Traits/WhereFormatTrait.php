<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait WhereFormatTrait
{
    protected $whereFormat = [];

    /**
     * @param array $whereFormat
     * @return static
     */
    public function whereFormat(array $whereFormat): self
    {
        $this->whereFormat = $whereFormat;
        return $this;
    }
}
