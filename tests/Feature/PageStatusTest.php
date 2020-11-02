<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageStatusTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNewsStatus()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }
    public function testOrderStatus()
    {
        $response = $this->get('/orders');

        $response->assertStatus(200);
    }

    public function testOrdersView()
    {
        $orders = $orders = [
            [
                'fio' => 'asdad',
                'phone' => 'asdasd',
                'email' => 'asdasd@asdasd.we',
                'description' => 'asasdasddas',
            ],
            ];
        $view = $this->view('orders.index', ['orders' => $orders]);

        $view->assertSee('asdad');
    }



}
