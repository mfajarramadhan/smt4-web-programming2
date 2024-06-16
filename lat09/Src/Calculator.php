<?php

    namespace Dummy;

    class Calculator {
        protected $mobil;
        
        function __construct(Mobil\Mobil $mobil) {
            $this->mobil = $mobil;
        }
        
        function hitungJarak() {
            $bbm = $this->mobil->getBbm();
            $efisiensi = $this->mobil->getEfisiensi();
            $jarakMax = $bbm * $efisiensi;
            return $jarakMax;
        }

    }