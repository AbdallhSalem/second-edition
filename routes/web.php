<?php

use App\Http\Controllers\SubjectController;
use App\Models\Subject;
use App\Models\Department;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('departments', function () {

    $departments = Department::get();
    return view('departments',['departments'=>$departments]);
});

// Route::get('subjects', function () {

//     $subjects = Subject::get();
//     return view('subjects',['subjects'=>$subjects]);
// })->name('subjects.x');

// ----------

// Route::get('/subjects/create', function () {

//     $subjects = Subject::get();
//     return view('subjects.create');
// });

//------------------

// Route::post('/subjects', function (Request $request) {
//     $formFields=$request->validate([
//         'name'=>'required',
//         'code'=>'required',
//         'department_id'=>'required'
//     ]);
//     Subject::create($formFields);
//     return Redirect::route('subjects.x');
    
// });
Route::resource('subjects',SubjectController::class);







