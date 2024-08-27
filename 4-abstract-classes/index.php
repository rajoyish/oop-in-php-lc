<?php

abstract class AchievementType
{
  public function icon(): string
  {
    return strtolower(str_replace(' ', '-', $this->name())) . '.png';
  }

  public function name(): string
  {
    $class = (new ReflectionClass($this))->getShortName();

    return trim(preg_replace('/[A-Z]/', ' $0', $class));
  }

  abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
  public function qualifier($user)
  {
    // TODO: Implement qualifier() method.
  }
}

$thousandPoints = new FirstThousandPoints();
echo $thousandPoints->name() . PHP_EOL;
echo $thousandPoints->icon() . PHP_EOL;
