<?php

use \App\Echoes;

test("should return the given text repeated n times", function() {
    expect(echoes::echoes("ab", 3))->toEqual("ababab");
        expect(echoes::echoes("kiwi", 1))->toEqual("kiwi");
        expect(echoes::echoes("cherry", 2))->toEqual("cherrycherry");
    });