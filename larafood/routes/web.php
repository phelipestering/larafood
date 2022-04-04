<?php

use App\Http\Controllers\Admin\DetailPlanController;
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



// @include('./planroutes.php');

// ROTAS DE PLANOS

Route::prefix('admin')->group(function(){
    Route::get('plans',[PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/create',[PlanController::class, 'create'])->name('plans.create');
    Route::post('plans/', [PlanController::class, 'store'])->name('plans.store');
    Route::get('plans/{id}', [PlanController::class, 'show'])->name('plans.show');
    Route::delete('plans/{id}', [PlanController::class, 'delete'])->name('plans.delete');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::get('plans/{id}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('plans/{id}', [PlanController::class, 'update'])->name('plans.update');
    // BreadCumbsw
    Route::get('/', [PlanController::class, 'index'])->name('admin.index');
    /**
     * Details Routes
     */
    Route::get('plans/{id}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');
    Route::get('plans/{id}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::post('plans/{id}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('plans/{id}/details/{idDetail}/edit', [DetailPlanController::class, 'edit'])->name('details.plan.edit');
    Route::put('plans/{id}/details/{idDetail}', [DetailPlanController::class, 'update'])->name('details.plan.update');
});




// Route::get('/', function () {
//     return view('welcome');
// });
