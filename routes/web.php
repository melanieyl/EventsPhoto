<?php

use App\Http\Controllers\Ecommerce\EstudioFotogrficoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\Ecommerce\EstudioFotograficoV;
use App\Http\Livewire\Ecommerce\ShowMySuscripciones;
use App\Http\Livewire\Ecommerce\ShowSuscripciones;
use App\Http\Livewire\EstudioFotografico\CreateEstudioFotografico;
use App\Http\Livewire\EstudioFotografico\EspecialidadLivewire;
use App\Http\Livewire\Evento\IngresoEvento;
use App\Http\Livewire\Evento\ShowEvento;
use App\Http\Livewire\Evento\ShowEventoFotografo;
use App\Http\Livewire\Evento\ShowEventosUsuario;
use App\Http\Livewire\Evento\SubirFoto;
use App\Http\Livewire\Invitacion\CrearInvitacionUsuario;
use App\Http\Livewire\Invitacion\VerInvitaciones;
use App\Http\Livewire\Invitacion\VerInvitacionesFotografo;
use App\Http\Livewire\Transacciones\CreateOrder;
use App\Http\Livewire\Transacciones\PaymentOrder;
use App\Http\Livewire\Usuario\FotosPerfil;
use Illuminate\Support\Facades\Route;

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
    return view('Mywelcome');
});
//estudio fotografico 
Route::get('EstudiosFotograficos', EstudioFotograficoV::class)->name('ecommerce.estudiofotografico.ver');
Route::get('EstudiosFotograficos/{estudiofotografico}', EstudioFotogrficoController::class)->name('ecommerce.estudiofotografico.unico');
//suscripciones
Route::get('ShowSuscripciones', ShowSuscripciones::class)->name('ecommerce.suscripciones');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    // 'chekRole:Fotografo,user'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     //usuario 
    Route::post('Fotoperfil', [FotosPerfil::class,'guardarImagen'])->name('fotoperfil');    

    //usuario Eventos 
    Route::get('EventoUsario', ShowEventosUsuario::class)->name('usuario.show_evento');
    //invitaciones
    Route::get('InvitacionUsuario/{estudiofotografico}', CrearInvitacionUsuario::class)->name('usuario.crear_invitacion');
    Route::get('Invitaciones', VerInvitaciones::class)->name('usuario.ver_invitacion');
    //suscripciones
    Route::get('ShowSuscripciones', ShowSuscripciones::class)->name('ecommerce.suscripciones');
    //eventos
    Route::get('ShowEventos', ShowEventosUsuario::class)->name('usuario.show_eventos');
    Route::get('ShowEvento/{evento}', ShowEvento::class)->name('usuario.show_evento_unidad');
    Route::get('IngresarEvento/{evento}',IngresoEvento::class)->name('usuario.ingreso_evento');
    Route::get('Payment/{order}',PaymentOrder::class)->name('paypal');
    Route::get('Create_Order/{cadena}/{id}',CreateOrder::class)->name('order');
    
});
