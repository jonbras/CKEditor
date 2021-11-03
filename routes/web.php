<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\CKeditorController;

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

Route::get('/', function () {
    return view('welcome');
});

//Trix Editor
Route::get('editor', [EditorController::class, 'index']);
Route::post('submit', [EditorController::class, 'submit']);
Route::post('upload', [EditorController::class, 'upload']);

//CK Editor
Route::get('editorCk', [CKeditorController::class, 'index']);
Route::get('editorCk2', [CKeditorController::class, 'index2']);
Route::post('submitCk', [CKeditorController::class, 'submit']);
Route::post('ckeditor/image_upload', [CKeditorController::class, 'upload'])->name('uploadCk');