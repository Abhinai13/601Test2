<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testExample()
    {
        $user = \App\User::find(5);
        echo $user["name"];
        $user->name='Steve Smith';
        $user->save();
        $this->assertTrue($user->save());

    }
}
