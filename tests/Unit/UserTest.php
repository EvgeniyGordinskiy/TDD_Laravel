<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_user_has_project()
    {
       $user = factory('App\User')->create();
       $this->assertInstanceOf(Collection::class, $user->projects);
    }
}
