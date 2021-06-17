<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/task', function () {
    $data=App\Models\Task::all();
    return view('task')->with('tasks',$data);
});

Route::get('/login',function(){
echo 'Kaveena';
});

Route::get('/about','Fontendcontroller@indexaboutus');

Route::post('/saveTask','App\Http\Controllers\TaskController@store');
Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','App\Http\Controllers\TaskController@deletetask');
Route::get('/updatetask/{id}','App\Http\Controllers\TaskController@updatetaskview');

Route::post('/updatetask/{id}','App\Http\Controllers\TaskController@updatetasks');
