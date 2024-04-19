<?php

namespace Rockschtar\WordPress\DatabaseFluent\Traits;

trait QueryTrait
{
    protected $query;

    protected $prepare = [];

    /**
     * @param string $query
     * @param array $prepare
     * @return static
     */
    public function query(string $query, array $prepare = []): self
    {
        $this->query = $query;
        $this->prepare = $prepare;
        return $this;
    }

    protected function getQuery(): string
    {
        global $wpdb;

        return \count($this->prepare) === 0 ? $this->query : $wpdb->prepare($this->query, $this->prepare);
    }
}
