<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_Login()
    {
        $response = $this->post('/LoginCheck',[
            'email' => 'demo@financialhouse.io',
            'password' => 'cjaiU8CV',
        ]);

        $response->assertStatus(200);
    }

    public function test_Logauth()
    {
        $response = $this->get('/Logauth');

        $response->assertRedirect('/');
    }


    public function test_Client()
    {
        $response = $this->get('Admin/Client/1011028-1539357144-1293');

        $response->assertStatus(302);
    }


    public function test_Transaction()
    {
        $response = $this->post('/Admin/TransactionForm',[
            'fromDate' => '2015-10-01',
            'toDate' => '2022-01-01',

        ]);

        $response->assertStatus(302);
    }

    
}
