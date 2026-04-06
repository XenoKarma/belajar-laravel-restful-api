<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $this->post('/api/users', [
            'username' => 'Andika',
            'password' => 'rahasia',
            'name' => 'andika'
        ])->assertStatus(201)
        ->assertJson([
            "data" => [
            'username' => 'Andika',
            'name' => 'andika'
            ]
        ]);
    }

    public function testRegisterFailed()
    {
        
    }

    public function testRegisterUsernameAlreadyExists()
    {

    }
}
