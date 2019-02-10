<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageProjectTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    public function test_a_user_can_create_a_project()
    {
        $this->actingAs(factory('App\User')->create());
        $this->withoutExceptionHandling();
        $attr = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
        $this->post('/projects', $attr)->assertRedirect('/projects');
        $this->assertDatabaseHas('projects', $attr);
        $this->get('projects')->assertSee($attr['title']);
    }

    public function test_a_project_requires_a_title()
    {
        $this->actingAs(factory('App\User')->create());
        $attr = factory('App\Project')->raw(['title' => '']);
        $this->post('/projects', $attr)->assertSessionHasErrors('title');
    }

    public function test_a_project_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());
        $attr = factory('App\Project')->raw(['description' => '']);
        $this->post('/projects', $attr)->assertSessionHasErrors('description');
    }

    public function test_guest_cannot_manage_project()
    {
        $project = factory('App\Project')->create();

        $this->post('/projects', $project->toArray())->assertRedirect('login');
        $this->get('/projects/create')->assertRedirect('login');
        $this->get('/projects')->assertRedirect('login');
        $this->get($project->path())->assertRedirect('login');

    }

    public function test_a_user_can_view_their_project()
    {
        $this->be(factory('App\User')->create());
        $project = factory('App\Project')->create(['owner_id' => auth()->id()]);

        $this->get($project->path())
            ->assertSee($project->title)
            ->assertSee($project->description);

    }

    public function test_an_authenticated_user_cannot_view_their_project_of_others()
    {
        $this->be(factory('App\User')->create());
        $project = factory('App\Project')->create();

        $this->get($project->path())
            ->assertStatus(403);

    }
}
