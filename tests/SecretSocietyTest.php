<?php

test("should return a string of first letters from array items", function() {
    $secretSociety = new \App\SecretSociety();
    expect($secretSociety::secretNames(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
    expect($secretSociety::secretNames(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
    expect($secretSociety::secretNames(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
});