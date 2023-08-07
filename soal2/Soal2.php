<?php
function groupByOwners(array $arrays): array
{
    $owners = [];
    foreach ($arrays as $array => $owner) {
        $owners[$owner][] = $array;
    }
    return $owners;
}

$data = array(
    'input.txt'=> 'Randy',
    'code.py'=> 'Stan',
    'output.txt'=> 'Randy'
);
var_dump(groupByOwners($data));
