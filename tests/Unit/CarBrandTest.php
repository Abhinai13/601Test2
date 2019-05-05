<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarBrandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $brandtest= \App\Car::find(31);
        $brand=$brandtest["make"];
        echo $brand;
        $arrBrand = array("Honda", "Toyota", "Ford");
        $this->assertTrue(in_array($brand, $arrBrand)
        );

    }
}
