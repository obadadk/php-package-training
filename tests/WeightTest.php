<?php

use Obadadk\PhpPackageTraining\Weight;

it('can convert kilograms to lbs', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();
    expect($lbs)->toBe(220.4623);
});
