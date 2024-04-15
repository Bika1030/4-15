<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    $student = \App\Models\Student::findOrFail(2);
    // dd($student->profile());

    // dd($student->profile->phone);

    // dd($student->comments);
    $subject = \App\Models\Subject::findOrFail(1);
    dd($subject->students);

});
