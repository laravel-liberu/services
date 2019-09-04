<?php

use Tests\TestCase;
use LaravelEnso\Core\app\Models\User;
use LaravelEnso\Services\app\Service;
use LaravelEnso\Forms\app\TestTraits\EditForm;
use LaravelEnso\Forms\app\TestTraits\CreateForm;
use LaravelEnso\Forms\app\TestTraits\DestroyForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use LaravelEnso\Tables\app\Traits\Tests\Datatable;

class ServiceTest extends TestCase
{
    use Datatable, DestroyForm, EditForm, CreateForm, RefreshDatabase;

    private $permissionGroup = 'administration.services';
    private $testModel;

    protected function setUp(): void
    {
        parent::setUp();

        // $this->withoutExceptionHandling();

        $this->seed()
            ->actingAs(User::first());

        $this->testModel = factory(Service::class)->make();
    }

    /** @test */
    public function can_store_service()
    {
        $response = $this->post(
            route('administration.services.store', [], false),
            $this->testModel->toArray()
        );

        $service = Service::whereName($this->testModel->name)
            ->first();

        $response->assertStatus(200)
            ->assertJsonStructure(['message'])
            ->assertJsonFragment([
                'redirect' => 'administration.services.edit',
                'param' => ['service' => $service->id],
            ]);
    }

    /** @test */
    public function can_update_service()
    {
        tap($this->testModel)->save()->name = 'updated';

        $this->patch(
            route('administration.services.update', $this->testModel->id, false),
            $this->testModel->toArray()
        )->assertStatus(200)
        ->assertJsonStructure(['message']);

        $this->assertEquals(
            $this->testModel->name,
            $this->testModel->fresh()->name
        );
    }

    /** @test */
    public function get_option_list()
    {
        $this->testModel->save();

        $this->get(route('administration.services.options', [
            'query' => $this->testModel->name,
            'limit' => 10,
        ], false))
        ->assertStatus(200)
        ->assertJsonFragment(['name' => $this->testModel->name]);
    }
}
