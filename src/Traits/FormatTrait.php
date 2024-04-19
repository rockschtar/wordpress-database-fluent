<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait FormatTrait
{
    /**
     * @var array
     */
    protected $format = [];

    /**
     * @param array $format
     * @return static
     */
    public function format(array $format): self
    {
        $this->format = $format;
        return $this;
    }
}
