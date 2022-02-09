<?php


use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('reservation', ReservationController::class);
    Route::get('my-reservation', [ReservationController::class, 'getMyReservation']);
});

