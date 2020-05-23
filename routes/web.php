<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\Contact;

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
    return view('shakil');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/save-message', 'ContactController@saveMessage');
Route::get('/all-contact', 'ContactController@allContact');
Route::get('/edit-contact/{id}/', 'ContactController@editContact');
Route::post('/update-message/{id}', 'ContactController@updateMessage');
Route::get('/delete-contact/{id}', 'ContactController@delete');


Route::get('/classes', 'ClassController@index');
