<?php

use \App\Cashier;
use \App\Grocery;

test("should return the total price of all groceries", function() {
    expect(cashier::cashier([ new Grocery("Milk", 1, 1.50)
        ]))->toEqual(1.5);
    expect(cashier::cashier([ new Grocery("Milk", 1, 1.50),
        new Grocery("Cereals", 1, 2.50)
    ]))->toEqual(4);
    expect(cashier::cashier([ new Grocery("Milk", 1, 1.50),
        new Grocery("Eggs", 12, 0.10),
        new Grocery("Bread", 2, 1.60),
        new Grocery("Cheese", 1, 4.50)
    ]))->toEqual(10.4);
    });