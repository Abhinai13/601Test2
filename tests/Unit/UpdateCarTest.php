<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $year = \App\Car::find(5);
        echo $year["year"];
        $year->year='2000';
        $year->save();
        $this->assertTrue($year->save());
    }
}
