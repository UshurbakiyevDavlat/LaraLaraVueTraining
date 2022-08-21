<?php

use App\Http\Controllers\Person\CreateController;
use App\Http\Controllers\Person\DeleteController;
use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\Person\PersonListController;
use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['Namespace' => 'Person', 'prefix' => 'person'], static function () {
//    Route::get('/', [IndexController::class, '__invoke'])->name('person.index');
    Route::post('/', [StoreController::class, '__invoke'])->name('person.store');

    Route::get('list', [PersonListController::class, '__invoke'])->name('person.list');
//    Route::get('/create', [CreateController::class, '__invoke'])->name('person.create');

    Route::patch('/update/{person}', [UpdateController::class, '__invoke'])->name('person.update');
    Route::delete('/delete/{person}', [DeleteController::class, '__invoke'])->name('person.delete');
});
