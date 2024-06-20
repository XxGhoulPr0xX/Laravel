<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeProductController extends Controller{
    public function index($sku,$nombre=null){
        if($nombre){    //parámetro opcional que puede o no estar presente en la URL
            return "SKU: {$sku} nombre: {$nombre}";//Si $nombre tiene un valor, el método devuelve un mensaje
        }
        else{
            return "SKU: {$sku} producto sin nombre";//Si $nombre no tiene un valor, el método devuelve un mensaje el producto no tiene nombre
        }
    }
    //
}
