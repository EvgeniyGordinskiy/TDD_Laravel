<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    public function test_a_project_can_have_tasks()
    {
        $this->withoutExceptionHandling();
        $this->signIn();

        $project = factory(Project::class)->create(['owner_id' => auth()->id()]);
        $this->post($project->path.'/tasks', ['body' => 'Lorem ipsum']);
        $this->get($project->path())->assertSee('Lorem ipsum');
    }
}
