<?php
class Person
{
    # old way
    // public string $name;
    // private string $darkSecret;

    // public function __construct(string $name)
    // {
    //     $this->name = $name;
    //     $this->darkSecret = "We are all going to die";
    // }

    # new way => PHP 8.1+
    public function __construct(
        public string $name,
        private int $age,
        private string $darkSecret = "We are all going to die"
    ) {}

    public function shareJob(): string
    {
        return 'PHP Developer';
    }

    private function shareDarkSecret(): string
    {
        return $this->darkSecret;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
