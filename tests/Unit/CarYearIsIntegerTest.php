<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearIsIntegerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $integertest= \App\Car::find(31);
        $year=$integertest["year"];
        echo $year;
        $this->assertTrue(ctype_digit($year));

    }
}
