<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\WelcomeProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        return view('welcome');
});
//ejercicio A ruta simple
Route::get('/usuarios', [UserController::class, 'index']);
// NOTA: Función Route::get() utilizado para registrar una ruta HTTP GET en la aplicación.

Route::get(
        '/ruta1',
        function () {
                return 'cadena de la ruta1';
        }
);

/*==================================================
        Ejercicio B - parametro en la ruta
==================================================*/

$uri_2 = '/usuarios/detalles';   //identificador para la ruta
$action_2 = function () {
        return 'Mostrando el detalle del usuario: ' .
                $_GET['id']; // proporcionar un parámetro id a través de la URL
};
//http://127.0.0.1:8000/usuarios/detalles?id=10        
Route::get($uri_2, $action_2);



/*==================================================
Ejercicio C - especificar un parametro en una ruta
get sin la variable $_get
==================================================*/

/*$action_3=function($id){
        return 'Mostrando el detalle del usuario: ' .$id;};*/
//        $action_3=function($id){
//        return "Mostrando el detalle del usuario:  {$id}";};

Route::get(
        'usuario/{id}',
        [UserController::class, 'show']
)->where('id', '\d+');
//La URL esperada para esta ruta es /usuarios/{id}, donde {id} serán solo dígitos.

Route::get(
        '/usuarios/{id}',
        function ($id) {
                return 'Mostrando el detalle del usuario: '
                        . $id;
        }
)->where('id', '\d+');
//where('id','[0-9]+');
// utiliza una función anónima (closure) para manejar la lógica de la ruta directamente.                       
//http://127.0.0.1:8000/usuarios/10


//-------------------------------------------
//Ejercicio D - Especificar un parametro en una ruta get sin la variable $_GET y diferenciando entre rutas

/*Route::get( '/usuarios/nuevo', function(){
                return 'Crear un usuario nuevo';}
        );*/
Route::get(
        '/usuarios/nuevo',
        [UserController::class, 'create']
);
//http://127.0.0.1:8000/usuarios/nuevo


//-------------------------------------------
//Ejercicio E -Definir la ruta GET con 2 parámetros

/*Route::get( 'productos/{sku}/{nombre}',
        function($sku,$nombre) {return "SKU:{$sku} nombre:{$nombre}";}
);

Route::get('productos/{sku}/{nombre?}',
        function($sku,$nombre=null) {
                if($nombre)
                        {return "SKU:{$sku} nombre:{$nombre}";}
                 else{
                        return "SKU:{$sku} producto sin nombre";
                 }
        }
);*/

route::get(
        'productos/{sku}/{nombre?}',
        [WelcomeProductController::class, 'index']
);
//http://127.0.0.1:8000/productos/hp-345-128GB/USB
//http://127.0.0.1:8000/productos/hp-345-128GB/


/*==================================================
Ejercicio F -Definir la ruta GET con 2 parámetros
==================================================*/
Route::get(
        'datos/{nombre}/{apellP}/{apellM}/{numCtrl}', //funcion para la solicitud GET en el URL
        function ($nombre, $apellP, $apellM, $numCtrl) { //se pasan como argumentos a la función
                return "Nombre:{$nombre} Apellido Paterno:{$apellP} Materno:{$apellM} Num.Control:{$numCtrl}";
        }
);

Route::get(
        'datos/{nombre?}/{apellP?}/{apellM?}/{numCtrl}', //maneja la solicitud GET para la URL
        function ($nombre, $apellP = null, $apellM = null, $numCtrl) {
                if ($apellP && $apellM) {  // Si ambos apellidos están presentes, muestra todos los detalles
                        return "Nombre:{$nombre} Paterno:{$apellP} Materno:{$apellM} NumControl:{$numCtrl}";
                } else {
                        if (!$apellP && !$apellM) {
                                return "Sin apellido paterno y materno"; // Si falta tanto el apellido paterno como el materno
                        } elseif (!$apellP) {
                                return "Materno:{$apellM} sin apellido paterno";
                        } elseif (!$apellM) {
                                return "Paterno:{$apellP} sin apellido materno";
                        }
                }
        }
);
//http://127.0.0.1:8000/datos/eddy/galicia/padilla/211064027
//http://127.0.0.1:8000/datos/eddy///211064027
//apP apM Numctl Nomb