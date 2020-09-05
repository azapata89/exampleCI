<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlaceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_cretae_place()
    {
        $response = $this->json('POST', '/create/place', ['name' => 'Sede # 1']);
        $response->dump();
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);

        $this->assertDatabaseHas('places',['name'=>'Sede # 1']);
    }
}
