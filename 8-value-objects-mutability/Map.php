<?php
require_once './Coordinates.php';

class Map
{
    public function placePin(Coordinates $point): void
    {
        // In a real application, this might interact with a database or mapping service
        echo "Pin placed at ({$point->getX()}, {$point->getY()})\n";
    }

    public function calculateDistance(Coordinates $point1, Coordinates $point2): float
    {
        // Simple Euclidean distance calculation
        $dx = $point2->getX() - $point1->getX();
        $dy = $point2->getY() - $point1->getY();
        return sqrt($dx * $dx + $dy * $dy);
    }
}
