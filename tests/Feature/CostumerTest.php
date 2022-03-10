<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CostumerTest extends TestCase
{
    /**
    @test
     */
    // @teste para dizer que é uma anotation para mudar o nome dos metodos. 

    public function apenas_user_logado_pode_ver_membros()
    {
        $response = $this->get('/membros')
            ->assertRedirect('/home');
    }
}
