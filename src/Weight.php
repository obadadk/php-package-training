<?php

namespace Obadadk\PhpPackageTraining;

class Weight
{   
    private float $kilograms;

    static function fromKilograms(float $kilograms):self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms) {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
