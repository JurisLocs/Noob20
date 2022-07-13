<?php

test("should return all lowercase letters", function() {
    $hideAndSeek = new \App\HideAndSeek();
    expect($hideAndSeek->find("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect($hideAndSeek->find("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect($hideAndSeek->find("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});