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

Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('home',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::post('sendmail__',[App\Http\Controllers\ArticleController::class,'store'])->name('sendmail__');
Route::get('about-us',[App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('projects',[App\Http\Controllers\ProjectController::class,'index'])->name('projects');
Route::get('products',[App\Http\Controllers\ProductController::class,'index'])->name('products');

Route::get('contact-us',[App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::get('project/{id}',[App\Http\Controllers\ProjectController::class,'detail'])->name('project_detail');
Route::get("pool", function(){return View::make("pool");})->name('pool');
Route::get("onsen", function(){return View::make("onsen");})->name('onsen');
Route::get("sauna", function(){return View::make("sauna");})->name('sauna');
Route::get("steam", function(){return View::make("steam");})->name('steam');
Route::get("customer", function(){return View::make("customer");})->name('customer');
Route::get("hydrotherapy", function(){return View::make("hydro");})->name('hydrotherapy');
// Route::get("contact", function(){return View::make("contact");})->name('contact');
Route::get("thankyou", function(){return View::make("thankyou");})->name('thankyou');



Route::get('adminips',[App\Http\Controllers\ProjectController::class,'project_list'])->name('project_list');
Route::get('adminips/contactlist',[App\Http\Controllers\ArticleController::class,'index'])->name('contacts.list');
Route::get('adminips/project_list',[App\Http\Controllers\ProjectController::class,'project_list'])->name('project_list');
Route::get('adminips/project_form',[App\Http\Controllers\ProjectController::class,'form'])->name('project_form');
Route::get('adminips/project_form_edit/{id}',[App\Http\Controllers\ProjectController::class,'edit'])->name('project_form_edit');
Route::post('adminips/project_form_update/{id}',[App\Http\Controllers\ProjectController::class,'update'])->name('project_form_update');
Route::post('adminips/project_insert',[App\Http\Controllers\ProjectController::class,'saveproject'])->name('saveproject');
Route::delete('adminips/delproject/{id}',[App\Http\Controllers\ProjectController::class,'delproject'])->name('delproject');