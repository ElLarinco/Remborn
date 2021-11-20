<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PostController;
use App\Mail\ContactsMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HomeController::class, "index"]) -> name("home");

/*Route::get('posts', [PostController::class, "index"]) -> name("posts.index");

Route::get('posts/create', [PostController::class, "create"]) -> name("posts.create");

Route::get('posts/{id}', [PostController::class, "show"]) -> name("posts.show");

Route::post('posts', [PostController::class, "store"]) -> name("posts.store");

Route::get("posts/{id}/edit", [PostController::class, "edit"]) -> name("posts.edit");

Route::put("posts/{id}", [PostController::class, "update"]) -> name("posts.update");

Route::delete("posts/{id}", [PostController::class, "destroy"]) -> name("posts.destroy");*/

// Route::resource('posteos', PostController::class)->names("posts");

Route::view('/', 'index') -> name("home");
Route::resource('posts', PostController::class);
Route::view('acerca', 'about') -> name("about");

Route::get('contactos', [ContactsController::class, "index"]) -> name("contacts.index");
Route::post('contactos', [ContactsController::class, "store"])->name('contacts.store');