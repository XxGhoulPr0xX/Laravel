<?php

namespace Test\Feature;

use Test\TestCase;
class ExampleTest extends TestCase
{
    public function test_the_application_return_a_successful_response(): void{
        $response = $this->get('/');

        $response->assertStatus(200);
    }    
}
