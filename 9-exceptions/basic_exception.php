<?php
function add(float $a, float $b): float
{
	if (!is_float($a) || !is_float($b)) {
		throw new InvalidArgumentException("Please provide a float");
	}

	return $a + $b;
}

try {
	echo add(2, []);
} catch (Exception $e) {
	echo "Error occurred: " . $e->getMessage();
}
