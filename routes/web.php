<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowProductos;
use App\Http\Controllers\Admin\HomeController;
Use App\Http\Controllers\ProductoController;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group (['middleware' =>[
    'auth:sanctum',
    'verified',
    'accessrole',
]],function () {

    Route::get('/dashboard', [HomeController::class, 'userpro'])->name('dashboard');
    Route::get('/admin', [HomeController::class, 'admin.index']);
    Route::get('/admin/proveedores', [ProveedorController::class, 'show']);
    Route::get('/admin/productos', [ProductoController::class, 'AdminListProduct'])->name('AdminListProduct');

//     Route::get('/dashboard', function () {
//     return view('auth.login');
// });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

   

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'accessrole',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
// Route::get('/productos',ShowProductos::class)->
// $productos= Producto::where('team_id',1)->get();

Route::get('/productos/crear', function () {
    return view('crearproducto');
})->name('crear');

// Route::get('/productos',[App\Http\Controllers\ProductoController::class, 'index'])->name ('productos');

Route::get('/productos',ShowProductos::class)->name ('productos');


// Route::get('/admin',function(){
//     return view('admin');
// })->name('admin');

// Route::get('/{urlslug}', Frontpage::class);
// Route::get('/', Frontpage::class);
});
Route::get('/', function () {
    return view('auth.login');
});