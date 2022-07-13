<?php

use App\DogYears;

test("should return dog's age in dog years", function () {
    $dogYears = new DogYears();
    expect($dogYears->calculate(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect($dogYears->calculate(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect($dogYears->calculate(15))->toEqual("Your doggie is 105 years old in dog years!");
});