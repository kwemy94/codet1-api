<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


/**
 * faire un middleware pour checker l'activation 
 * du compte utilisateur avant de le connecter
 * valble pour les routes ci dessous (je pense)
 */
Route::prefix('codet-v1')->group(function () {
    Route::resource('settings', SettingController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('association', AssociationController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('donations', DonationController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('/cards', CardController::class);
});


