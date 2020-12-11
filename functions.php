<?php

function generateCombinations($things, $count = 800) {
    $countThings = count($things);   // Count things
    $combinations = array();

    for ($i=0; $i<$count; $i++) {
        $array = array();
        for ($j=0; $j<$countThings; $i++) {
            $array[] = mt_rand(0,1) == 1;
        }
        $combinations[] = $array;
    }

    return $combinations;
}
