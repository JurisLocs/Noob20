<?php
use \App\VacationBudget;
test("should return the sum of people's budgets", function() {
    expect(vacationBudget::budget([
            new App\Person("Bob",265,23000),
            new App\Person("Steve",32,40000),
            new App\Person("Martin",265,2700),
        ]))->toEqual(65700);
    });