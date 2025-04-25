<?php

namespace wojianduanfa\DemoPakage1;

class DemoPakage1
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function say()
    {
        return $this->config['message'];
    }
}
