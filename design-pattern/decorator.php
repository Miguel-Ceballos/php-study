<?php

interface BudgetInterface{
    public function cost(): float;
}

class BasicBudget implements BudgetInterface
{
    private int $hours;
    private float $hourlyRate;

    /**
     * @param int $hours
     * @param float $hourlyRate
     */
    public function __construct(int $hours, float $hourlyRate)
    {
        $this->hours = $hours;
        $this->hourlyRate = $hourlyRate;
    }

    public function cost(): float
    {
        return $this->hours * $this->hourlyRate;
    }
}

# Clase base
class BudgetDecorator implements BudgetInterface
{
    protected BudgetInterface $budgedt;

    /**
     * @param BudgetInterface $budgedt
     */
    public function __construct(BudgetInterface $budgedt)
    {
        $this->budgedt = $budgedt;
    }

    public function cost(): float
    {
        return $this->budgedt->cost();
    }
}

class ForeignBudgetDecorator extends BudgetDecorator
{
    const float EXCHANGE_RATE = 1.5;

    public function cost():float
    {
        return parent::cost() * self::EXCHANGE_RATE;
    }
}

class CustomerBudgetDecorator extends BudgetDecorator
{
    const float DISCOUNT = 0.9;

    public function cost(): float
    {
        return parent::cost() * self::DISCOUNT;
    }
}

$budget = new BasicBudget(10, 100);
echo "Presupuesto base: $ " . $budget->cost() . "<br>";

$foreignBudget = new ForeignBudgetDecorator($budget);
echo "Presupuesto extranjero: $ " . $foreignBudget->cost() . "<br>";

$customerBudget = new CustomerBudgetDecorator($budget);
echo "Presupuesto cliente frecuente: $ " . $customerBudget->cost() . "<br>";
