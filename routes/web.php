<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\Main\IndexController')->name('main.index');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::get('/', 'App\Http\Controllers\Admin\Main\IndexController')->name('admin.main.index');

    Route::group(['prefix' => 'course'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Course\IndexController')->name('admin.course.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Course\CreateController')->name('admin.course.create');
        Route::post('/', 'App\Http\Controllers\Admin\Course\StoreController')->name('admin.course.store');
        Route::get('/{course}', 'App\Http\Controllers\Admin\Course\ShowController')->name('admin.course.show');
        Route::get('/{course}/edit', 'App\Http\Controllers\Admin\Course\EditController')->name('admin.course.edit');
        Route::patch('/{course}', 'App\Http\Controllers\Admin\Course\UpdateController')->name('admin.course.update');
        Route::delete('/{course}', 'App\Http\Controllers\Admin\Course\DeleteController')->name('admin.course.delete');

        Route::group(['prefix' => 'lesson'], function () {
            Route::get('/', 'App\Http\Controllers\Admin\Course\Lesson\IndexController')->name('admin.course.lesson.index');
            Route::get('/create/{course}', 'App\Http\Controllers\Admin\Course\Lesson\CreateController')->name('admin.course.lesson.create');
            Route::post('/{course}', 'App\Http\Controllers\Admin\Course\Lesson\StoreController')->name('admin.course.lesson.store');
            Route::get('/{lesson}', 'App\Http\Controllers\Admin\Course\Lesson\ShowController')->name('admin.course.lesson.show');
            Route::get('/{lesson}/edit', 'App\Http\Controllers\Admin\Course\Lesson\EditController')->name('admin.course.lesson.edit');
            Route::patch('/{lesson}', 'App\Http\Controllers\Admin\Course\Lesson\UpdateController')->name('admin.course.lesson.update');
            Route::delete('/{lesson}', 'App\Http\Controllers\Admin\Course\Lesson\DeleteController')->name('admin.course.lesson.delete');
        });
    });
    
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\User\IndexController')->name('admin.user.index');
        Route::get('/create', 'App\Http\Controllers\Admin\User\CreateController')->name('admin.user.create');
        Route::post('/', 'App\Http\Controllers\Admin\User\StoreController')->name('admin.user.store');
        Route::get('/{user}', 'App\Http\Controllers\Admin\User\ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'App\Http\Controllers\Admin\User\EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'App\Http\Controllers\Admin\User\UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'App\Http\Controllers\Admin\User\DeleteController')->name('admin.user.delete');
    });

    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Tag\IndexController')->name('admin.tag.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Tag\CreateController')->name('admin.tag.create');
        Route::post('/', 'App\Http\Controllers\Admin\Tag\StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'App\Http\Controllers\Admin\Tag\ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'App\Http\Controllers\Admin\Tag\EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'App\Http\Controllers\Admin\Tag\UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'App\Http\Controllers\Admin\Tag\DeleteController')->name('admin.tag.delete');
    });
});

Auth::routes(['verify' => true]);