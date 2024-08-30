<?php
class Age
{
    private int $value;

    public function __construct(int $age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException("Age must be between 0 and 120");
        }
        $this->value = $age;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
