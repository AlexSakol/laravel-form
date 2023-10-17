<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
}) ->name('contacts');

Route::post('/contacts/editmessage/{id}', [ContactsController::class,'edit_message_submit']) -> name('edit-message-submit');

Route::get('/contacts/edit/{id}', [ContactsController::class,'edit_message']) -> name('edit-message');
Route::get('/contacts/delete/{id}', [ContactsController::class,'delete_message']) -> name('delete-message');

Route::post('/contacts/submit', [ContactsController::class,'submit']) -> name('submit');
Route::get('/contacts/all', [ContactsController::class,'GetData']) -> name('contacts-all');
