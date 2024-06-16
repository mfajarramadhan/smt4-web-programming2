<?php

namespace Dummy\Mobil;

class Toyota extends Mobil
{
    protected $efisiensi = 10;

    public function getEfisiensi()
    {
        return $this->efisiensi;
    }
}
