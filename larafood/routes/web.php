<?php

use App\Http\Controllers\Admin\PlanController;
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





// ROTAS DE PLANOS

Route::get('admin/plans',
            [PlanController::class, 'index'])
            ->name('plans.index');

Route::get('admin/plans/create',
            [PlanController::class, 'create'])
            ->name('plans.create');

Route::post('admin/plans/', [PlanController::class, 'store'])
            ->name('plans.store');

Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');

Route::delete('admin/plans/{url}', [PlanController::class, 'delete'])->name('plans.delete');

Route::any('admin/plans/search', [PlanController::class, 'search'])->name('plans.search');

Route::get('/', function () {
    return view('welcome');
});
