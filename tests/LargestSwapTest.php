<?php
use \App\LargestSwap;
test("should return true if it's the largest of two possible digit swaps, false if not", function(){
    expect(largestSwap::swap(27))->toEqual(false);
    expect(largestSwap::swap(43))->toEqual(true);
    expect(largestSwap::swap(14))->toEqual(false);
});