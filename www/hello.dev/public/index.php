<?php

include("../Services/NextSmallerNumberService.php");
include("../Services/ArrayValidatorService.php");

use Services\NextSmallerNumberService;
use Services\ArrayValidatorService;

$dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
$arrayValidatorService = new ArrayValidatorService($dataset);

if (!$arrayValidatorService->validate()) {
    echo "-1";
    exit();
}

$previousSmallerNumberService = new NextSmallerNumberService($dataset);
$value1 = 12;
$value2 = 14;

$result1 = $previousSmallerNumberService->findNextSmallestNumber($value1);
$result2 = $previousSmallerNumberService->findNextSmallestNumber($value2);

echo "f($value1) => $result1<br>";
echo "f($value2) => $result2<br>";