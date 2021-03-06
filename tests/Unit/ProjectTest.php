<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

  public function test_it_has_a_path()
  {
      $project = factory('App\Project')->create();

      $this->assertEquals('/projects/'.$project->id,$project->path());
  }

  public function it_belongs_to_an_owner()
  {
      $project = factory('App\Project')->create();
      $this->assertInstanceOf(User::class,$project->owner);
  }

  public function it_can_add_a_task()
  {
      $project = factory('App\Project')->create();

      $project->addTask('Test task');

      $this->assertCount(1, $project->task);
  }

}
