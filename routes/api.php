<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/***
LE ROTTE con middleware non servono perchè la vista essendo pubblica non ha bisogno di dati privati
***/

// quindi faccio un altra rotta normale
// tutte le rotte inserite qui in "api.php" avranno come prefisso "api/..." (es. api/prova)
Route::get('prova', function(){
    return response()->json(
        [
            "name" => "Andrea", 
            "lastname" => "Fontaneto"
        ]
    );
});