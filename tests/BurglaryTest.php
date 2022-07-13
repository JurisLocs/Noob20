<?php
use \App\Burglary;
test("should return the total value of stolen items", function() {
    expect(Burglary::items(["TV","TV","TV"]))->toEqual(3);
    expect(Burglary::items(["TV","TV","TV"]))->toEqual(3);
    expect(Burglary::items(["TV","TV","TV"]))->toEqual(3);
    });
    test("should return a string 'Lucky you!', if nothing was stolen", function(){
    expect(Burglary::items([]))->toEqual("Lucky You!");
    });