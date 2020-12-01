<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\InvoiceController;

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
    return view('dashboard');
})->middleware('auth');
Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('income', IncomeController::class);
Route::get('/outcome',[OutcomeController::class,'index'])->name('outcome.index')->middleware('auth');
Route::put('/outcome/{id}',[OutcomeController::class,'update'])->name('outcome.update')->middleware('auth');
Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
    Route:: get ('logout', 'AuthController@register');
})->name('dashboard');

