<?php

$numes = [20, 10, 9, 8, 3, 6, 1, 2, 3, 4, 5, 6, 7, 'CR7', 8, 9, 10];

if (in_array(10, $numes)) {
    foreach (array_keys($numes, 10) as $nume) {print("{$nume} ");}
}
print("</br>");
if (in_array('CR7', $numes)) {
    foreach (array_keys($numes, 'CR7') as $nume) {print("{$nume} ");}
}
