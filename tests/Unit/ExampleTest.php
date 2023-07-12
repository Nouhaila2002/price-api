<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\UnitTestController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }


    public function testAddition()
    {
        $result = 2 + 2;
        $result2 = (new UnitTestController)->sum();

        $this->assertEquals(10, $result2);
    }


    

}
