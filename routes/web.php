<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/',[HomeController::class,"home"])->name("home");

/* Recuperar imagenes de nuevo anuncio*/
Route::get('/announcement/images', [AnnouncementController::class,'getImages'])->name('announcement.images');

/* Nuevo anuncio */
Route::get('/announcement/create',[AnnouncementController::class,'create'])->name("announcement.create");
Route::post('/announcement/store',[AnnouncementController::class,'store'])->name("announcement.store");

/* Detalles de anuncio */
Route::get('/announcement/{id}',[AnnouncementController::class,"show"])->name("announcement.show");

/* Todos los anuncios */
Route::get('/announcements-all',[AnnouncementController::class,"all"])->name("announcement.all");

/* Anuncios por categoria */
Route::get('/category/{name}/{id}/announcements', [HomeController::class,'announcementsByCategory'])->name('category.announcements');

/* Revisor */
Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.announcement.reject');

/* Banderas nav */
Route::post('/locale/{locale}', [HomeController::class,'locale'])->name('locale');

/* Imagenes de nuevo anuncio */
Route::post('/announcement/images/upload', [AnnouncementController::class,'uploadImages'])->name('announcement.images.upload');

/* Borrar imagenes de nuevo anuncio */
Route::delete('/announcement/images/remove', [AnnouncementController::class,'removeImages'])->name('announcement.images.remove');

/* Busqueda */
Route::get('/search', [HomeController::class,'search'])->name('search');