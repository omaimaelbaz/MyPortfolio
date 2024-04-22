<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use MongoDB\Laravel\Auth\User as Authenticatable;
use MongoDB\Laravel\Eloquent\Model;

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

// porfolio view



//user table


Route::get('/users',[UserController::class,'getUsers']);

Route::post('/register',[AuthController::class,'register']);
Route::get('/login', [AuthController::class, 'login']);




// iformation table
Route::get('/info',[InformationsController::class,'getInfo']);

//formation table

Route::get('/formation',[FormationsController::class,'getformation']);
Route::post('/create', [FormationsController::class, 'store']);
Route::post('/update/{id}', [FormationsController::class, 'updateFormation']);
Route::get('/delete/{id}', [FormationsController::class, 'deleteFormation']);


// experience table

Route::get('/experience',[ExperiencesController::class,'getexperience']);
Route::post('/createExperience', [ExperiencesController::class, 'createExperience']);
Route::post('/updateExperience/{id}', [ExperiencesController::class, 'updateExperience']);
Route::get('/deleteExperience/{id}', [ExperiencesController::class, 'deleteExperience']);


