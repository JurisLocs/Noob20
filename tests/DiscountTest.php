<?php

test("should return the final price after the discount", function() {
    $discount = new \App\Discount();
    expect($discount->discount(1500, 50))->toEqual(750);
    expect($discount->discount(89, 20))->toEqual(71.2);
    expect($discount->discount(100, 75))->toEqual(25);
});