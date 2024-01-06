<?php

namespace Services;

class ArrayValidatorService
{
    private array $randomNumbers;

    public function __construct(array $randomNumbers)
    {
        $this->randomNumbers = $randomNumbers;
    }

    public function validate(): bool
    {
        foreach ($this->randomNumbers as $current) {
            if (!is_int($current) || $current <= 0) {
                return false;
            }
        }

        return true;
    }
}