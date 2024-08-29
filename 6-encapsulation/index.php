<?php
require_once "Person.php";
require_once "TennisMatch.php";
require_once "Counter.php";

$bob = new Person('Bob', 30);
echo 'Job Title: ' . $bob->shareJob() . PHP_EOL;
// echo $bob->shareDarkSecret();  // ❌ not allowed
echo 'Age: ' . $bob->getAge() . PHP_EOL;

// TennisMatch
$tennish = new TennisMatch;
echo 'Tenish Score: ' . $tennish->hasScore() . PHP_EOL;

// Counter
$counter1 = new Counter;
$counter1->increment();

$counter2 = new Counter;
$counter2->increment();

echo 'Count: ' . Counter::$count; // 2
