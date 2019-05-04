<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use UsersTableSeeder;

class CountUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $usercount = \App\User::count();
        $isSeeded = false;
        if($usercount >= "50" ){
            $isSeeded = true;
        }
        $this->assertTrue($isSeeded);


    }
}
