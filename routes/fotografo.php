<?php

use App\Http\Livewire\Ecommerce\ShowMySuscripciones;
use App\Http\Livewire\EstudioFotografico\CreateEstudioFotografico;
use App\Http\Livewire\EstudioFotografico\EspecialidadLivewire;
use App\Http\Livewire\Evento\InteligenciaArtificial;
use App\Http\Livewire\Evento\ShowEventoFotografo;
use App\Http\Livewire\Evento\SubirFoto;
use App\Http\Livewire\Invitacion\VerInvitacionesFotografo;
use Illuminate\Support\Facades\Route;


Route::get('/prueba',function(){
    return 'hola fotografo';
});

//Estudio Fotografico
Route::get('Miestudio',CreateEstudioFotografico::class)->name('fotografo.create_estudiofotografico');
//especialidades
Route::get('especialidades/{estudio}',EspecialidadLivewire::class)->name('fotografo.create_especialidad');
//evento
Route::get('EventoFotografo',ShowEventoFotografo::class)->name('fotografo.evento');
Route::get('EventoFotos{evento}',SubirFoto::class)->name('fotografo.subir_fotografia_evento');
Route::get('Inteligencia',InteligenciaArtificial::class)->name('fotografo.inteligencia');
//inivtaciones
Route::get('Invitacionesfotografo',VerInvitacionesFotografo::class)->name('fotografo.ver_invitacion');
//sucripciones 
Route::get('ShowMySuscripciones',ShowMySuscripciones::class)->name('fotografo.Mysuscripciones');