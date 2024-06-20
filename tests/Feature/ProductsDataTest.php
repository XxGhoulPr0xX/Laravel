<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsDataTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_productos_with_name(){     /*test_ prefijo de laravel EJERCICIO D conNombre*/
        $response = $this->get('productos/hp-345-128GB/USB');
        $response->assertStatus(200);
        $response->assertSee("SKU: hp-345-128GB nombre: USB");
    }

    public function test_productos_without_name(){  /*test_ prefijo de laravel EJERCICIO D sinNombre*/
        $response = $this->get('productos/hp-345-128GB/');
        $response->assertStatus(200);
        $response->assertSee("SKU: hp-345-128GB producto sin nombre");
    }
}
