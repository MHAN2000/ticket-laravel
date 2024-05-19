<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\EducationLevelController;

Route::post('/login_user', [UserController::class, 'login'])->name('login_user');
Route::get('/login', [UserController::class, 'index'])->name('login');

Route::get('/cities/all-cities', [CityController::class, 'getCities'])->name('cities.getCities');
Route::get('/tickets/get-pdf/{id}', [TicketController::class, 'getPDF'])->name('tickets.getPDF');
Route::get('/subject/all-subjects', [SubjectController::class, 'getSubjects'])->name('subjects.getSubjects');
Route::get('/responsable/all-responsables', [ResponsableController::class, 'getResponsables'])->name('responsables.getResponsables');
Route::get('/tickets/get-available-times/{date}', [TicketController::class, 'getAvailableTimes'])->name('tickets.available_times');
Route::get('/education-levels/all-education-levels', [EducationLevelController::class, 'getEducationLevels'])->name('educationLevels.getEducationLevels');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [UserController::class, 'home'])->name('home');
    Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
    Route::get('/users', [UserController::class, 'indexUsers'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
    Route::resource('/cities', CityController::class);
    Route::resource('/tickets', TicketController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/education-levels', EducationLevelController::class);

});