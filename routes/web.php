<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenueController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/userdashboard', [PagesController::class, 'userdashboard'])->name('userdashboard');

Route::get('/userprofile', [PagesController::class, 'userprofile'])->name('userprofile');
Route::post('/userprofile/{id}/update', [UserController::class, 'updateuserProfile'])->name('updateuserProfile');

Route::get('/userbookings', [PagesController::class, 'userbookings'])->name('userbookings');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/venue', [PagesController::class, 'venue'])->name('venue');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/{id}/eventdetails', [PagesController::class, 'eventdetails'])->name('eventdetails');
Route::get('/{id}/offerdetails', [PagesController::class, 'offerdetails'])->name('offerdetails');
Route::get('/{id}/servicedetails', [PagesController::class, 'servicedetails'])->name('servicedetails');







Route::prefix('admin/')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event/{id}/update', [EventController::class, 'update'])->name('event.update');
    Route::post('/event/delete', [EventController::class, 'delete'])->name('event.delete');

    //Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/{gallery}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/delete', [GalleryController::class, 'delete'])->name('gallery.delete');

    //Services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{services}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/services/{services}/update', [ServiceController::class, 'update'])->name('services.update');
    Route::post('/services/delete', [ServiceController::class, 'delete'])->name('services.delete');

    //User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/delete', [UserController::class, 'delete'])->name('user.delete');

    //Venue
    Route::get('/venue', [VenueController::class, 'index'])->name('venue.index');
    Route::get('/venue/create', [VenueController::class, 'create'])->name('venue.create');
    Route::post('/venue/store', [VenueController::class, 'store'])->name('venue.store');
    Route::get('/venue/{venue}/edit', [VenueController::class, 'edit'])->name('venue.edit');
    Route::post('/venue/{venue}/update', [VenueController::class, 'update'])->name('venue.update');
    Route::post('/venue/delete', [VenueController::class, 'delete'])->name('venue.delete');

    //Offer
    Route::get('/offer', [OfferController::class, 'index'])->name('offer.index');
    Route::get('/offer/create', [OfferController::class, 'create'])->name('offer.create');
    Route::post('/offer/store', [OfferController::class, 'store'])->name('offer.store');
    Route::get('/offer/{offer}/edit', [OfferController::class, 'edit'])->name('offer.edit');
    Route::post('/offer/{offer}/update', [OfferController::class, 'update'])->name('offer.update');
    Route::post('/offer/delete', [OfferController::class, 'delete'])->name('offer.delete');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
