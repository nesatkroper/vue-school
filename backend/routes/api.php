<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as ro;

ro::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


ro::get('/student', [StudentController::class, 'getStudent']);
ro::get('/student/{id}', [StudentController::class, 'getOnlyStudent']);
ro::post('/student', [StudentController::class, 'createStudent']);
ro::put('/student/{id}', [StudentController::class, 'updateStudent']);
ro::patch('/student/{id}', [StudentController::class, 'deleteStudent']);
