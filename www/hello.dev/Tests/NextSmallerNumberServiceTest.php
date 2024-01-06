<?php

namespace Tests;

include("../Services/NextSmallerNumberService.php");
use PHPUnit\Framework\TestCase;
use Services\NextSmallerNumberService;

class NextSmallerNumberServiceTest extends TestCase
{

    public function testFindNextSmallestNumber() {
        $dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
        $finder = new NextSmallerNumberService($dataset);

        $this->assertEquals(-1, $finder->findNextSmallestNumber(-1));
        $this->assertEquals(-1, $finder->findNextSmallestNumber((float) 1.5));
        $this->assertEquals(10, $finder->findNextSmallestNumber(12));
        $this->assertEquals(12, $finder->findNextSmallestNumber(14));
        $this->assertEquals(-1, $finder->findNextSmallestNumber(2));
    }
}
