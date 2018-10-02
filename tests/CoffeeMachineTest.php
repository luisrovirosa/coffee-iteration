<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeMachine;
use CoffeeMachine\DrinkMaker;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    /** @test */
    public function should_give_a_tea_with_one_sugar() {
        $drinkMakerProphecy = $this->prophesize(DrinkMaker::class);
        /** @var DrinkMaker $drinkMaker */
        $drinkMaker = $drinkMakerProphecy->reveal();
        $coffeeMachine = new CoffeeMachine($drinkMaker);

        $coffeeMachine->selectTea();

        $drinkMakerProphecy->execute('T:1:0')->shouldHaveBeenCalled();
    }

    /** @test */
    public function should_give_a_coffee_with_one_sugar() {
        $drinkMakerProphecy = $this->prophesize(DrinkMaker::class);
        /** @var DrinkMaker $drinkMaker */
        $drinkMaker = $drinkMakerProphecy->reveal();
        $coffeeMachine = new CoffeeMachine($drinkMaker);

        $coffeeMachine->selectCoffee();

        $drinkMakerProphecy->execute('C:1:0')->shouldHaveBeenCalled();
    }
    /** @test */
    public function should_give_a_chocolate_with_one_sugar() {
        $drinkMakerProphecy = $this->prophesize(DrinkMaker::class);
        /** @var DrinkMaker $drinkMaker */
        $drinkMaker = $drinkMakerProphecy->reveal();
        $coffeeMachine = new CoffeeMachine($drinkMaker);

        $coffeeMachine->selectChocolate();

        $drinkMakerProphecy->execute('H:1:0')->shouldHaveBeenCalled();
    }

    /** @test */
    public function can_add_suggar_to_tea() {
        $drinkMakerProphecy = $this->prophesize(DrinkMaker::class);
        /** @var DrinkMaker $drinkMaker */
        $drinkMaker = $drinkMakerProphecy->reveal();
        $coffeeMachine = new CoffeeMachine($drinkMaker);

        $coffeeMachine->moreSugar();
        $coffeeMachine->selectTea();

        $drinkMakerProphecy->execute('T:2:0')->shouldHaveBeenCalled();
    }
    /** @test */
    public function xxx() {
        $drinkMakerProphecy = $this->prophesize(DrinkMaker::class);
        /** @var DrinkMaker $drinkMaker */
        $drinkMaker = $drinkMakerProphecy->reveal();
        $coffeeMachine = new CoffeeMachine($drinkMaker);

        $coffeeMachine->lessSugar();
        $coffeeMachine->selectTea();

        $drinkMakerProphecy->execute('T::')->shouldHaveBeenCalled();
    }
}