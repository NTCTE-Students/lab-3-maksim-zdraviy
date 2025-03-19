<?php

$numes = [20, 10, 9, 8, 3, 6, 1, 2, 3, 4, 5, 6, 7, 'CR7', 8, 9, 10];
$unique = array_unique($numes);

foreach ($unique as $nume) {
    print("{$nume} ");
}

