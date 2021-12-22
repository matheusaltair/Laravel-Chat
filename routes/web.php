<?php

use Illuminate\Support\Facades\Route;
use App\Events\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

Route::get('/', function () {
    return view('index');
});
Route::post('/send-mensagem', function (Request $request){
    Event(
        new Mensagem(
            $request->input('username'),
            $request->input('mensagem') )
        );
        return ['success' => true];
});
