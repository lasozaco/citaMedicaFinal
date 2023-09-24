<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesWeb extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_especialidades()
    {
        $response = $this->get('/especialidades');

        $response->assertStatus(200);
    }
}