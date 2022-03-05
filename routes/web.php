<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



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

// Route::get('/about', function () {
//     return view('about');
// });

// Route::view('/about', 'about');

// Route::get('/pages/about', [PagesController::class, 'about'])->name('page.about');
// Route::get('/pages/contact', [PagesController::class, 'contact'])->name('page.contact');
// Route::get('/pages/service', [PagesController::class, 'service'])->name('page.service');

Route::controller(PagesController::class)->prefix('pages')->name('page.')->group( function (){
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/service', 'service')->name('service');
});

// Route::group(['controller' => PagesController::class, 'prefix'=>'pages', 'as' => 'page.'], function () {
//     Route::get('/about', 'about')->name('about');
//     Route::get('/contact', 'contact')->name('contact');
//     Route::get('/service', 'service')->name('service');
// });


// Route::get('/user/{abc}', function ($abc) {
//     // return view('user', compact('abc'));
//     // return view('user', ['abc' => $abc]);
//     return view('user')->with('abc', $abc);
// });

Route::get('/user/{name}/{age}', function ($name, $age) {
    return 'My name is '.$name.' and i am '.$age.' years old.';
})->where(['name' => '[a-z|A-Z]+', 'age' => '[0-9]+']);











