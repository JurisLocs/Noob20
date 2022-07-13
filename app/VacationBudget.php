<?php

namespace App;

class VacationBudget{

    public static function budget(array $budgets):int{
        $sum = 0;
        foreach ($budgets as $budget){
            $sum += $budget->getBudget();
        }
        return $sum;
    }
}

class Person{
    private string $name;
    private int $age;
    private int $budget;

    /**
     * @param string $name
     * @param int $age
     * @param int $budget
     */
    public function __construct(string $name, int $age, int $budget)
    {
        $this->name = $name;
        $this->age = $age;
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getBudget(): int
    {
        return $this->budget;
    }

}