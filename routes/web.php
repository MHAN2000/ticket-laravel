<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\EducationLevelController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserController::class, 'index']);

Route::get('/cities/all-cities', [CityController::class, 'getCities'])->name('cities.getCities');
Route::get('/tickets/get-pdf/{id}', [TicketController::class, 'getPDF'])->name('tickets.getPDF');
Route::get('/subject/all-subjects', [SubjectController::class, 'getSubjects'])->name('subjects.getSubjects');
Route::get('/responsable/all-responsables', [ResponsableController::class, 'getResponsables'])->name('responsables.getResponsables');
Route::get('/education-levels/all-education-levels', [EducationLevelController::class, 'getEducationLevels'])->name('educationLevels.getEducationLevels');
Route::resource('/cities', CityController::class);
Route::resource('/tickets', TicketController::class);
Route::resource('/subjects', SubjectController::class);