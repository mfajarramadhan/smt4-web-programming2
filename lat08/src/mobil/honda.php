<?php

namespace mobil;

include "mobil.php";
class Honda extends Mobil
{
    protected $efisiensi = 15;

    function getEfisiensi()
    {
        return $this->efisiensi;
    }
}
