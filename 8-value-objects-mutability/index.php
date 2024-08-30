<?php
require_once 'Age.php';

try {
    $validAge = new Age(25);
    echo 'Valid Age: ' . $validAge->getValue() . PHP_EOL;

    $invalidAge = new Age(130);
} catch (\InvalidArgumentException $e) {
    echo "Invalid age error: " . $e->getMessage() . PHP_EOL;
}

// MutableAge Usage
require_once './MutableAge.php';

$mutableAge = new MutableAge(30);
echo "Mutable Age: " . $mutableAge->getValue() . PHP_EOL;

$mutableAge->increment();
echo "Mutable Age after increment: " . $mutableAge->getValue() . PHP_EOL;

// Immutable Age
require_once './ImmutableAge.php';

$immutableAge = new ImmutableAge(40);
echo "Immutable Age: " . $immutableAge->getValue() . "\n";
$newImmutableAge = $immutableAge->increment();
echo "Original Immutable Age: " . $immutableAge->getValue() . "\n";
echo "New Immutable Age after increment: " . $newImmutableAge->getValue() . "\n";

// Coordinates and Map
require_once './Map.php';

$map = new Map();
$point1 = new Coordinates(10.5, 20.7);
$point2 = new Coordinates(30.2, 40.9);

$map->placePin($point1);
echo "Placed pin at coordinates: (" . $point1->getX() . ", " . $point1->getY() . ")\n";

$distance = $map->calculateDistance($point1, $point2);
echo "Distance between points: " . $distance . "\n";

require_once './ForumSignature.php';
// User with Forum Signature (Null Object Pattern)
$userWithSignature = new User("John Doe", "john@example.com", "This is my signature");
$userWithoutSignature = new User("Jane Smith", "jane@example.com");

echo "User with signature: " . $userWithSignature->getSignature()->display() . "\n";
echo "User without signature: " . $userWithoutSignature->getSignature()->display() . "\n";
