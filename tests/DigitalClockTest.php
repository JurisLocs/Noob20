<?php

use \App\DigitalClock;

test("should convert seconds to a time string in format hh:mm:ss", function(){
    expect(digitalClock::time(5025))->toEqual("01:23:45");
    expect(digitalClock::time(61201))->toEqual("17:00:01");
    expect(digitalClock::time(87000))->toEqual("00:10:00");
});