<?php

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
    return view('welcome');
});


// Route::get('/contacts', function() {
//     return "jdsjdjsjdss";
// });


Route::controller('App\Http\Controllers\ContactController')
->prefix('contacts')
->name('contacts.')
->group(function () {

    Route::get('/', 'index')->name('list');

    Route::get('/{id}', 'Show_byID')->name('show');

    Route::get('/{id}/{name?}', 'Show_byID_Name')->name('show_name')->where('id', '[0-9]+');

    Route::get('/{id}/edit', 'Edit_byIDMsg')->name('edit');

    Route::get('/create', 'Create')->name('create');

    Route::post('/', 'store')->name('store');

    Route::put('/{id}', 'editContact')->name('update');

    Route::delete('/{id}', 'delete')->name('delete');

});

Route::get('/students/create', 'App\Http\Controllers\StudentController@Create')->name('students.create');
Route::post('/students',  'App\Http\Controllers\StudentController@store');
Route::get('/students', 'App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/{id}/edit',  'App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::put('/students/{id}/',  'App\Http\Controllers\StudentController@update')->name('students.update');
Route::delete('/students/{id}',  'App\Http\Controllers\StudentController@destroy')->name('students.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
