<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait TableTrait
{
    /**
     * @var string
     */
    protected $table;

    /**
     * @param string $table
     * @return static
     */
    public function table(string $table): self
    {
        $this->table = $table;
        return $this;
    }
}
