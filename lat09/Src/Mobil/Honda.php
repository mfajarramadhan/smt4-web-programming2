<?php

    namespace Dummy\Mobil;

    class Honda extends Mobil {
        protected $efisiensi = 15;

        public function getEfisiensi() {
            return $this->efisiensi;
        }
    }