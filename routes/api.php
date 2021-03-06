<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EnrollmentController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('enrollment-api', [EnrollmentController::class, 'enrollmentAPI']);

Route::post('login', [EnrollmentController::class, 'login']);
Route::post('register', [EnrollmentController::class, 'register']);

Route::post('reset-password', [EnrollmentController::class, 'resetPassword']);

Route::get('get-all-enrollment', [EnrollmentController::class, 'getAllEnrollment']);
Route::get('get-enrollment', [EnrollmentController::class, 'getEnrollment']);
Route::get('search-enrollment', [EnrollmentController::class, 'searchEnrollment']);