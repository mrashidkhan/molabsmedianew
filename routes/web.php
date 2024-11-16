<?php

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

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::get('/contentwriters', [PageController::class, 'contentwriters'])->name('contentwriters');
Route::get('/creativewriting', [PageController::class, 'creativewriting'])->name('creativewriting');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/graphicsdesign', [PageController::class, 'graphicsdesign'])->name('graphicsdesign');
Route::get('/itandtelecom', [PageController::class, 'itandtelecom'])->name('itandtelecom');
Route::get('/molabsteam', [PageController::class, 'molabsteam'])->name('molabsteam');
Route::get('/pastevents', [PageController::class, 'pastevents'])->name('pastevents');
Route::get('/picturearchive', [PageController::class, 'picturearchive'])->name('picturearchive');
Route::get('/posterarchive', [PageController::class, 'posterarchive'])->name('posterarchive');
Route::get('/thanks', [PageController::class, 'thanks'])->name('thanks');
Route::get('/upcomingevents', [PageController::class, 'upcomingevents'])->name('upcomingevents');
Route::get('/videoproduction', [PageController::class, 'videoproduction'])->name('videoproduction');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/videoarchive', [PageController::class, 'videoarchive'])->name('videoarchive');
Route::get('/webdesign', [PageController::class, 'webdesign'])->name('webdesign');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
