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

use App\Employee;
use App\Time_track;
use App\Job_process;
use App\Material;
use App\User;



Route::get('/', function () {
    return view('home');
});
Route::get('/main','AdminController@index', function () {
    return view('layouts.app');
});
Route::prefix('api')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::Resource('/employees', 'EmployeesController');
        Route::Resource('/time_tracks', 'Time_Trackscontroller');
    });
    Route::prefix('v1')->group(function () {
    });
});


//Route::Resource('/employees', 'EmployeesController');
//Route::Resource('/time_tracks', 'Time_tracksController');


Route::GET('/display', 'EmployeesController@display');

Route::POST('/ajax_call', 'Time_tracksController@ajax_call');

Route::POST('/call_record_by_ajax', 'Time_tracksController@call_record_by_ajax');


Route::get('/create', function () {
    //Employee
    Employee::create(['identification' => '1234', 'first_name' => 'Charles', 'last_name' => 'Cho', 'street' => '804-100 Parkway forest drive', 'city' => 'Toronto', 'province' => 'ON', 'postal_code' => 'M2Y1M5', 'phone_number' => '647-233-2333', 'email' => 'ccho21@myseneca.ca', 'position' => 'frontend developer']);
    Employee::create(['identification' => '2345', 'first_name' => 'Mulu', 'last_name' => 'Hlome', 'street' => '804-100 Parkway forest drive', 'city' => 'Toronto', 'province' => 'ON', 'postal_code' => 'M2Y1M5', 'phone_number' => '647-345-3456', 'email' => 'mulu@myseneca.ca', 'position' => 'leading developer']);
    Employee::create(['identification' => '3456', 'first_name' => 'Taslima', 'last_name' => 'Rahman', 'street' => '804-100 Parkway forest drive', 'city' => 'Toronto', 'province' => 'ON', 'postal_code' => 'M2Y1M5', 'phone_number' => '647-456-4567', 'email' => 'taslima@myseneca.ca', 'position' => 'Web developer']);

    //Job Process
    Job_process::create(['title' => 'Cutting']);
    Job_process::create(['title' => 'Finishing']);
    Job_process::create(['title' => 'Assembling']);
    Job_process::create(['title' => 'Installing']);
    Job_process::create(['title' => 'Delivery']);

    Material::create(['title' => 'Ceramic Stone', 'size' => '6 X 6', 'quantity' => '20', 'price' => '20.00', 'tag' => '812345678', 'barcode' => '812345678']);
    Material::create(['title' => 'Tile', 'size' => '4 X 4', 'quantity' => '50', 'price' => '100.00', 'tag' => '812348723', 'barcode' => '812348723']);
    Material::create(['title' => 'Cement', 'size' => '20kg', 'quantity' => '100', 'price' => '200.00', 'tag' => '818732', 'barcode' => '818732']);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

