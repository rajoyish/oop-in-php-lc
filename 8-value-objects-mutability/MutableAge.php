<?php
class MutableAge
{
    private int $value;

    public function __construct(int $age)
    {
        $this->setValue($age);
    }

    public function setValue(int $age): void
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

    public function increment(): void
    {
        $this->setValue($this->value + 1);
    }
}
