<?php

    namespace Dummy\Mobil;

    abstract class Mobil {
        protected $merk = '';
        protected $bbm = 0;

        function __construct(string $merk, int $bbm) {
            $this->merk = $merk;
            $this->bbm = $bbm;
        }

        function getMerk() {
            return $this->merk;
        }

        function getBbm() {
            return $this->bbm;
        }

        abstract public function getEfisiensi();

    }