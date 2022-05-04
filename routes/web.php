<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::get('/contacts',fn()=>view('contact'));

Route::get('/produtos/{id}',function($id=''){
    $busca = request('search');
    return view('product',[
        'id'=>$id,
        'busca'=>$busca
    ]);
});