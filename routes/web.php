<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sendemail', function () {
    $to_name = 'romulo';
    $to_email = 'mcginnis68@hotmail.com';
    $data = array('name'=>"Sam Jose", "body" => "Test mail");
        
    Mail::send('welcome', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Confirmación de Correo electrónico');
        $message->from('mcginnis.martinez.romulo@gmail.com','Cloudbucket');
    });
    return "Your email has been sent successfully";
});