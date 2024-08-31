<?php
require_once './Team.php';

$team = new Team();

try {
	$team->addMember("Jane");
	$team->addMember("John");
	$team->addMember("Alice");
	$team->addMember("Bob"); // This will throw an exception
} catch (TeamException $e) {
	echo "Team error: " . $e->getMessage() . PHP_EOL;
}
