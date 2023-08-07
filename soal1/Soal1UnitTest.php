<?php

use PHPUnit\Framework\TestCase;

require_once "Soal1.php";

class Soal1UnitTest extends TestCase
{
    public function testUniqueNames()
    {
        $names1 = ['Ava', 'Emma', 'Olivia'];
        $names2 = ['Olivia', 'Sophia', 'Emma'];

        $expectedResult = ['Ava', 'Emma', 'Olivia', 'Sophia'];
        $result = soal1($names1, $names2);
        $this->assertEquals($expectedResult, $result);
    }
}
