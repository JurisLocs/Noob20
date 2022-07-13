<?php
use \App\DoubleTrouble;

test("should remove duplicate values from array", function(){
    expect(doubleTrouble::doubleTrouble(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect(doubleTrouble::doubleTrouble(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect(doubleTrouble::doubleTrouble(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});