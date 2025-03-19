<?php

$numes = [20, 10, 9, 8, 3, 6, 1, 2, 3, 4, 5, 6, 7, 'CR7', 8, 9, 10];

$sort = $numes;
sort($sort);

$rsort = $numes;
rsort($rsort);

foreach ($sort as $nume) {
    print("{$nume} ");
}
print("</br>");
foreach ($rsort as $nume) {
    print("{$nume} ");
}