<?php
use \App\Kindergarten;
test("should reverses all the words in a sentence that start with a particular letter", function() {
    expect(kindergarten::kindergarten("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
    expect(kindergarten::kindergarten("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
    expect(kindergarten::kindergarten("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
});