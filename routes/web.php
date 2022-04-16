<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//1 Задание
Route::get('/my-name', function () {
    return 'Роденко Александр Витальевич';
});

//2 Задание
Route::get('/my-friend', function () {
    return 'Алина Шакирова Шамильевна';
});

//3 Задание
Route::get('/get-friend/{name?}', function ($name = null) {
    return $name;
});

//4 Задание
Route::get('/city/{name?}', function ($name = null) {
    return $name;
});

//5 Задание
Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl <= 26){
        return 'Уровень новичок ' .$lvl;
    }
    elseif ($lvl <= 50 ){
        return 'Уровень специалист ' .$lvl;
    }
    elseif ($lvl <= 75){
        return 'Уровень босс ' .$lvl;
    }
    elseif ($lvl <= 98){
        return 'Уровень старик ' .$lvl;
    }
    else{
        return 'Уровень король ' .$lvl;
    }
});

//6 Задание
Route::get('/working/{name}/{date}', function ($name, $date) {
    return 'Название проекта: ' .$name .' '. 'Дата исполнения: '. $date;
});

//7 Задание
Route::get('/power/{name}', function ($name) {
    return \route('power', ['name' => $name]);
})->name('power');

//8 Задание
Route::prefix('/admin')->group(function (){
    Route::get('/login', function(){
        return \route('login');
    })->name('login');
    Route::get('/logout', function(){
        return \route('logout');
    })->name('logout');

    Route::get('/info', function(){
        return \route('info');
    })->name('info');

    Route::get('/color', function(){
        return \route('color');
    })->name('color');
});

//9 Задание
Route::redirect('/admin/web', '/admin/color');

//10 Задание
Route::get('/color/{hex}', function ($hex){
    return "Цвет: {$hex}";
})->where(['hex' => '[0-9A-F]{6}']);
