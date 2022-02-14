<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use PhpParser\Node\Expr\Print_;

class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testController()
    {
        $response = $this->call('GET', '/api/list/');

        $this->assertEquals(200, $response->status());

    }
}
