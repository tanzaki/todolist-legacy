<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Task;

$listTaskController = function () {
    $tasks = \App\Task::all();
    $data = [
        'tasksItems' => $tasks,
    ];
    return view('list_items', $data);
};
Route::get('/', $listTaskController);
Route::get('/list', $listTaskController);
$createTaskController = function (){
    return view('create_task');
};
Route::get('/create', $createTaskController)->name('tasks.create');
$storeTaskController = function (){
    //and then we start again
};
Route::post('/store', $storeTaskController)->name('tasks.store');
