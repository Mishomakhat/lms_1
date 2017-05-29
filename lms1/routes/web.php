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

Route::get('/about', function () {
    return view('about')->with('foo','bar');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/register', function () {
    return view('user.create');
});
/*Route::get('post','PostController@index');*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('main', function () {
    return view('index');
});
Route::get('Error', function () {
    return view('Error');
});


/*Route::resource('faculties', 'FacultyController',['except'=>['destroy']])->middleware(' App\Http\Middleware\checkstaus');*/

Route::resource('faculties', 'FacultyController',['except'=>['destroy']]);

Route::resource('programs', 'ProgramController',['except'=>['destroy']]);
Route::resource('users', 'UserControler',['except'=>['destroy']]);
Route::resource('students', 'StudentController',['except'=>['destroy']]);

Route::get('admin', function(){
	echo 'jigaro';
})->middleware('admin'); 

Route::get('index', 'MainPageControler@index');