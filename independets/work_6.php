<?php

$numes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numes2 = ['fddfjdksf', 'CR7', 'hgglsfsdgfsfsd'];
$merge = array_merge($numes, $numes2);

foreach ($merge as $nume) {
    print("{$nume} ");
}