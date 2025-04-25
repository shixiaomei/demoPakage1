<?php

namespace wojianduanfa\DemoPakage1;

class DemoPakage1
{


    public function __construct()
    {

    }

    public function say()
    {
        return config('demopakage1.message');
    }
}
