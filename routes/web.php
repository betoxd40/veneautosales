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
Route::get('/', 'IndexController@indexHome')->name('index');
Route::get('inventory', 'InventoryController@indexInventory')->name('inventory');
Route::get('inventory/{makes}/{models}/{prices}', 'InventoryController@indexInventoryFiltro');
Route::get('about-us', 'AboutUsController@index')->name('about-us');
Route::get('schedule-test-drive', 'ScheduleTestDriveController@index')->name('schedule-test-drive');
Route::get('cars-upon-request', 'CarsUponRequestController@index')->name('cars-upon-request');
Route::get('contact', 'ContactController@index')->name('contact');
Route::get('/vehicle-information/{id}', 'VehicleInformation@indexVehicle')->name('vehicle-information');

Route::get('add-car',['as'=>'add-car','uses'=>'AddCarController2@indexAddCar'])->name('add-car');
Route::get('support',['as'=>'support','uses'=>'Support@index'])->name('support');
Route::get('add-user',['as'=>'add-user','uses'=>'AddUserController@indexAddUser'])->name('add-user');
Route::get('modify-car',['as'=>'modify-car','uses'=>'EditCarController@indexEditCar'])->name('modify-car');
Route::resource('dashboard/add-car-resource','AddCarController2',['except' => ['create', 'edit', 'show', 'destroy']]);
Route::resource('dashboard/add-user-resource','AddUserController',['except' => ['create', 'edit', 'destroy','update']]);
Route::resource('dashboard/support','Support',['except' => ['create']]);
Route::resource('dashboard/modify-car-resource','EditCarController',['except' => 'create','show','edit']);
Route::resource('getStadistics','HomeController',['except' => ['create', 'edit', 'destroy','store','update']]);

Route::resource('index','IndexController',['except' => ['create', 'edit', 'destroy','update']]);
Route::resource('contact-resource','ContactController',['except' => ['create', 'edit', 'destroy','update']]);
Route::resource('cars-upon-request-resource','CarsUponRequestController',['except' => ['create', 'edit', 'destroy','update']]);
Route::resource('inventoryRoute','InventoryController',['except' => ['create', 'edit', 'destroy','update']]);
Route::resource('/vehicle-information/vehicleRoute/route','VehicleInformation',['except' => ['create', 'edit', 'destroy','update']]);


Auth::routes();

Route::get('/dashboard', 'HomeController@indexDash')->name('home');
Route::get('/dashboard/add-car', 'AddCarController2@indexAddCar')->name('add-car');
Route::get('/dashboard/add-user', 'AddUserController@indexAddUser')->name('add-user');
Route::get('/dashboard/support', 'Support@index')->name('support');
Route::get('/dashboard/modify-car', 'EditCarController@indexEditCar')->name('modify-car');
