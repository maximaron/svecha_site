<?php

use App\Livewire\Payment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpellFormController;

Route::view('/', 'welcome')->name('home');
Route::view('/terms-of-use', 'terms-of-use')->name('terms-of-use');
Route::get('/spell/{spellName}', [SpellFormController::class, 'showForm'])->name('spell.form');
//Route::get('/payment/{uuid}', Payment::class)->name('payment');
Route::post('/spell/first_info_add', [SpellFormController::class, 'first_info_add'])->name('spell.first_info_add');
