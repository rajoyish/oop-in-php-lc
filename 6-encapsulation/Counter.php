<?php
class Counter
{
    // Static properties are shared among all instances of a class. Use them cautiously to avoid unexpected behavior.
    public static int $count = 0;

    public function increment(): void
    {
        self::$count++;
    }
}
