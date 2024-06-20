<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_probar_ruta_uno() /*test_ prefijo de laravel*/
    {
        $response = $this->get('/ruta1'); // Realiza una solicitud GET a la URL '/ruta1'
        $response->assertStatus(200);  // Verifica que la respuesta tenga un código de estado HTTP 200
        $response->assertSee('cadena de la ruta1');  // Verifica que la respuesta contenga la cadena específica 'cadena de la ruta1'
    }

    public function test_details_page() /*test_ prefijo de laravel EJERCICIO C*/
    {
        $response = $this->get('usuarios/5'); // Realiza una solicitud GET a la URL
        $response->assertStatus(200); // Verifica que la respuesta tenga un código de estado HTTP 200
        $response->assertSee('Mostrando el detalle del usuario: 5');// Verifica que la respuesta contenga la cadena específica
    }

    public function test_products_with_name() /*test_ prefijo de laravel EJERCICIO E-F*/
    {
        $response = $this->get('productos/hp-usb-128GB-12/USB');
        $response->assertStatus(200);
        $response->assertSee('SKU: hp-usb-128GB-12 nombre: USB');
    }


    public function test_new_users_page() /*test_ prefijo de laravel EJERCICIO C*/
    {
        $response = $this->get('usuarios/nuevo'); 
        $response->assertStatus(200);
        $response->assertSee('Crear un usuario nuevo');
    }
    public function test_usuarios(){   //Ejercicio D
        $response = $this->get('/usuarios'); // Realiza una solicitud GET a la URL '/usuarios'
        $response->assertStatus(200);
        $response->assertSee('List users'); // Verifica que la respuesta contenga la cadena 'List users'
        $response->assertSee('user1'); // Verifica que la respuesta contenga las cadenas de usuarios esperadas
        $response->assertSee('user2');
        $response->assertSee('user3');
        $response->assertSee('user4');
        $response->assertSee('user5');
    }

    function test_usuarios_empty(){
        $response = $this->get('/usuarios?empty');
        $response->assertStatus(200);
        $response->assertSee('No hay usuarios registrados');
    }
}