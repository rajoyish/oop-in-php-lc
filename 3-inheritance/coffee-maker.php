<?php

class CoffeeMaker
{
  public function brew(): void
  {
    var_dump('Brewing the coffee');
  }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
  public function brewLatte(): void
  {
    var_dump('Brewing the Latte');
  }
}

(new SpecialtyCoffeeMaker())->brew() . PHP_EOL;
(new SpecialtyCoffeeMaker())->brewLatte() . PHP_EOL;
