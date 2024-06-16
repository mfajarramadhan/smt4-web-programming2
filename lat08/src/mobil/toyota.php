<?php

namespace mobil;

include "mobil.php";

class Toyota extends Mobil
{
    protected $efisiensi = 10;

    function getEfisiensi()
    {
        return $this->efisiensi;
    }
}
