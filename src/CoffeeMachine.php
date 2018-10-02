<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    /**
     * @var DrinkMaker
     */
    private $drinkMaker;

    private $sugar = 1;

    public function __construct(DrinkMaker $drinkMaker)
    {
        $this->drinkMaker = $drinkMaker;
    }

    public function selectTea()
    {
        $numberOfSugar = $this->sugar ? '0': '';
        $this->drinkMaker->execute('T:' . $this->sugar . ':' . $numberOfSugar);
    }

    public function selectCoffee()
    {
        $this->drinkMaker->execute('C:1:0');
    }

    public function selectChocolate()
    {
        $this->drinkMaker->execute('H:1:0');
    }

    public function moreSugar()
    {
        $this->sugar++;
    }

    public function lessSugar()
    {
        $this->sugar = '';
    }
}