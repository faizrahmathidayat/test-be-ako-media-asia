<?php

function soal1($arr1, $arr2)
{
    // Combine the arrays
    $combinedArray = array_merge($arr1, $arr2);

    // Remove duplicates
    $uniqueArray = array_unique($combinedArray);

    // Return the unique names
    return array_values($uniqueArray);
}