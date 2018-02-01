<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname() 
    {
    	$this->get('saludo/edward/edd')
    		->assertStatus(200)
    		->assertSee('Bienvenido Edward, tu apodo es edd');
    }

    /** @test */
    function it_welcomes_users_without_nickname ()
    {
		$this->get('/saludo/edward')
    		->assertStatus(200)
    		->assertSee('Bienvenido Edward');
    }
}
