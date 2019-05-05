<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $carcount = \App\Car::count();
        $isSeeded = false;
        if($carcount = "50" ){
            $isSeeded = true;
        }
        $this->assertTrue($isSeeded);


    }
}


