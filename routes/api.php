<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackOffice\OfficeNieuwsBerichtenController;
use App\Http\Controllers\NieuwsBerichtenController;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ContactController;
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
//Auth
Route::post('/v1/auth/register', [AuthController::class, 'create']);
Route::post('/v1/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/v1/auth/me', [AuthController::class, 'me']);
Route::middleware('auth:sanctum')->post('/v1/auth/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->post('/v1/auth/update', [AuthController::class, 'update']);
Route::middleware('auth:sanctum')->post('/v1/auth/update-password', [AuthController::class, 'updatePassword']);

Route::get('/v1/news/latest', [NieuwsBerichtenController::class, 'latest']);
Route::get('/v1/office/news', [OfficeNieuwsBerichtenController::class, 'index']);


Route::middleware('auth:sanctum')->group(static function() {
// News
    Route::post('/v1/office/news', [OfficeNieuwsBerichtenController::class, 'create']);
    Route::get('/v1/office/news/{id}', [OfficeNieuwsBerichtenController::class, 'getById'])->where('id', '[0-9]+');
    Route::post('/v1/office/news/{id}', [OfficeNieuwsBerichtenController::class, 'update'])->where('id', '[0-9]+');
    Route::post('/v1/office/news/{id}/upload', [OfficeNieuwsBerichtenController::class, 'upload'])->where('id', '[0-9]+');
    Route::delete('/v1/office/news/{id}', [OfficeNieuwsBerichtenController::class, 'delete'])->where('id', '[0-9]+');
});

// Volunteer
Route::post('/v1/lid-worden/vrijwilliger-worden', [VolunteerController::class, 'store']);

// Member
Route::post('/v1/lid-worden/donateur-worden', [MemberController::class, 'store']);

//Contact
Route::post('/v1/contact', [ContactController::class, 'store']);
Route::get('/v1/contact/get', [ContactController::class, 'latest']);

// Fallback
Route::any('/v1/{any}', function() { abort(404, 'page not found'); })->where('any', '.*');


