<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

Route::get('ticket/listar', [TicketController::class, 'list']);
Route::resource('ticket', TicketController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
