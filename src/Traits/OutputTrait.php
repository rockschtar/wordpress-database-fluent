<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

use Rockschtar\WordPress\DatabaseFluent\Enums\Output;

trait OutputTrait
{
    protected $output = Output::OBJECT;

    /**
     * @param string $output
     * @return static
     */
    public function output(string $output = Output::OBJECT): self
    {
        $this->output = $output;
        return $this;
    }
}
