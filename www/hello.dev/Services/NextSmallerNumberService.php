<?php
namespace Services;
class NextSmallerNumberService
{
    private array $randomNumbers;

    public function __construct(array $dataset)
    {
        $this->randomNumbers = $dataset;
    }

    public function findNextSmallestNumber(int $current): int
    {
        rsort($this->randomNumbers);

        foreach ($this->randomNumbers as $number) {
            if ($number < $current) {
                return $number;
            }
        }

        return -1;
    }
}