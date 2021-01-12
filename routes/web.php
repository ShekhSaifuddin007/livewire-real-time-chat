<?php

use App\Http\Livewire\ChatRoom;
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

Route::view('/', 'welcome')->name('home');

Route::get('/chat', ChatRoom::class)->middleware('auth')->name('chat');

require __DIR__.'./auth.php';

