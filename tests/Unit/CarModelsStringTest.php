<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelsStringTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $modeltest= \App\Car::find(31);
        $model=$modeltest["model"];
        echo $model;
        $this->assertTrue(is_string($model));

    }
}