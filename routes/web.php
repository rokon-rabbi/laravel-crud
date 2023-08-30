<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get( '/', function () {
//     return view( 'backend.students.dashboard' );
// } );

Route::get( '/students', [StudentController::class, 'dashboard'] )->name( 'students.dashboard' );
Route::get( '/students/create', [StudentController::class, 'create'] )->name( 'students.add' );
Route::post( '/students/store', [StudentController::class, 'store'] )->name( 'students.store' );
Route::get( '/students/show', [StudentController::class, 'show'] )->name( 'students.show' );
Route::get( '/students/{studentData}/edit', [StudentController::class, 'edit'] )->name( 'students.edit' );
Route::patch( '/students/update/{studentData}', [StudentController::class, 'update'] )->name( 'students.update' );

// Route::get( '/index', function () {
//     return view( 'index' );
// } );

// Route::get( '/dashboard', function () {
//     return view( 'dashboard' );
// } );