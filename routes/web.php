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

Route::get('/wilder', 'WilderRegistrationController@show')->name('wilder');

Route::post('/wilder', function(){
    $wilder = new App\Wilders;
    $wilder -> lastname = request('lastname');
    $wilder -> name = request('name');
    $wilder -> email = request('email');
    $wilder -> school = request('school');
    $wilder -> promo = request('promo');
    $wilder -> language = request('language');
    $wilder -> description = request('description');
    $wilder -> where = request('where');
    $wilder -> why = request('why');
    $wilder -> tomorrow = request('tomorrow');
    $wilder -> save();

    return 'Le wilder ' . $_POST['name'] . ' ' . $_POST['lastname'] .' est enregistré dans la base de données.';

});

Route::get('/wilders', 'WilderRegistrationController@index')->name('wilders');

// Route::get('/wilders', function () {
//     $wilder = App\Wilders::all();
//     return view('wilders', [
//         'wilders' => $wilder
//     ]);
// });