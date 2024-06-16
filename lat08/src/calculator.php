<?php

namespace calculator;

class Cal
{
    protected $mobil;

    function __construct($mobil)
    {
        $this->mobil = $mobil;
    }

    function hitungJarak()
    {
        $bbm = $this->mobil->getbbm();
        $efisiensi = $this->mobil->getEfisiensi();
        $jarakMax = $bbm * $efisiensi;

        return $jarakMax;
    }
}
