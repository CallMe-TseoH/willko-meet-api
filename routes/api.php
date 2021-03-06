<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ExtendedUserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VisitController;
use App\Models\Meeting;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("extendedUser", ExtendedUserController::class);

Route::apiResource("visits", VisitController::class);

Route::apiResource("meetings", MeetingController::class);

Route::apiResource("parcels", ParcelController::class);

Route::apiResource("presences", PresenceController::class);

Route::apiResource("devices", DeviceController::class);

Route::apiResource('rooms', RoomController::class);

Route::apiResource('guests', GuestController::class);


