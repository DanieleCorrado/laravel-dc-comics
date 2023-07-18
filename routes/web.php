<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ResMainController;

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

Route :: get("/", [MainController :: class, "index"])
    -> name('comic.index');

Route :: get('/comics/create', [MainController :: class, 'create'])
    -> name('comics.create');

Route :: post('/comics', [MainController :: class, 'store'])
    -> name('comics.store');

Route :: get("/comics/{id}", [MainController :: class, "show"])
    -> name('comics.show');

Route :: get('/edit/{id}', [MainController :: class, "edit"])
    -> name('edit');

Route :: put('/update/{id}', [MainController :: class, "update"])
    -> name('update');

Route :: delete('/destroy/{id}', [MainController :: class, 'destroy'])
    -> name('destroy');