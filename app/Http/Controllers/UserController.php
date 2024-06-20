<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (request()->has('empty')){// Verifica si el parámetro 'empty' está presente en la solicitud es decir, vacía
            $users = [];
        }

        else{
            $users=['user1','user2','user3','user4','user5','<script>alert("Clicker")</script>'];
            // Asigna un array con nombres de usuario y un elemento de script HTML a $users
        }
        //return 'Usuarios';        
        //return view('users', ['variable' => $users, 'title'=>'List users']);   //cadena: variable-nodo: users    vistas trabajan con array asociativo
        //return view('users')->with('variable',$users)->with('title','List users');
        $variable=$users;
        $title='List users';

        //dd(compact('variable','title'));
        return view('users', compact('variable','title'));
    }

    public function show($id){
        //return 'Mostrando detalle del usuario: {$id}'; //array asociativo
        return view('user-show', compact('id'));
    }
    
    public function create(){
        return 'Crear un usuario nuevo';
    }
}

