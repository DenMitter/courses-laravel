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


//Route::get('/', 'App\Http\Controllers\Main\IndexController')->name('main.index');
Route::post('/message', 'App\Http\Controllers\Main\MessageController')->name('main.index.message');
Route::post('/subscribe', 'App\Http\Controllers\Main\NewsletterSubscribeController')->name('main.index.subscribe');
Route::post('/help', 'App\Http\Controllers\Main\HelpController')->name('main.index.help');
Route::get('/webinars', 'App\Http\Controllers\Main\WebinarsController')->name('main.webinars');
Route::get('/blog', 'App\Http\Controllers\Main\BlogController')->name('main.blog');
Route::get('/about', 'App\Http\Controllers\Main\AboutController')->name('main.about');
Route::get('/contacts', 'App\Http\Controllers\Main\ContactsController')->name('main.contacts');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\User\Main\IndexController')->name('user.main.index');

    Route::group(['prefix' => 'course', 'middleware' => 'auth'], function () {
        Route::get('/{course}', 'App\Http\Controllers\User\Course\IndexController')->name('user.course.index');
        Route::get('/take/{course}', 'App\Http\Controllers\User\Course\TakeCourseController')->name('user.course.take');
        Route::get('/payment/{course}', 'App\Http\Controllers\User\Course\PaymentController')->name('user.course.payment');

        Route::get('/lesson/{lesson}/course/{course}', 'App\Http\Controllers\User\Lesson\IndexController')->name('user.lesson.index');
    });
});

Route::group(['prefix' => 'course'], function () {
    Route::get('/{course}', 'App\Http\Controllers\Course\IndexController')->name('course.index');
});

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

        Route::group(['prefix' => 'test'], function () {
            Route::get('/', 'App\Http\Controllers\Admin\Course\Test\IndexController')->name('admin.course.test.index');
            Route::get('/create/{course}', 'App\Http\Controllers\Admin\Course\Test\CreateController')->name('admin.course.test.create');
            Route::post('/{course}', 'App\Http\Controllers\Admin\Course\Test\StoreController')->name('admin.course.test.store');
            Route::get('/{test}', 'App\Http\Controllers\Admin\Course\Test\ShowController')->name('admin.course.test.show');
            Route::get('/{test}/edit', 'App\Http\Controllers\Admin\Course\Test\EditController')->name('admin.course.test.edit');
            Route::patch('/{test}', 'App\Http\Controllers\Admin\Course\Test\UpdateController')->name('admin.course.test.update');
            Route::delete('/{test}', 'App\Http\Controllers\Admin\Course\Test\DeleteController')->name('admin.course.test.delete');
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

    Route::group(['prefix' => 'newsletter'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Newsletter\IndexController')->name('admin.newsletter.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Newsletter\CreateController')->name('admin.newsletter.create');
        Route::post('/', 'App\Http\Controllers\Admin\Newsletter\StoreController')->name('admin.newsletter.store');
        Route::get('/{newsletter}', 'App\Http\Controllers\Admin\Newsletter\ShowController')->name('admin.newsletter.show');
        Route::get('/{newsletter}/edit', 'App\Http\Controllers\Admin\Newsletter\EditController')->name('admin.newsletter.edit');
        // Route::patch('/{newsletter}', 'App\Http\Controllers\Admin\Newsletter\UpdateController')->name('admin.newsletter.update');
        Route::delete('/{newsletter}', 'App\Http\Controllers\Admin\Newsletter\DeleteController')->name('admin.newsletter.delete');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Blog\IndexController')->name('admin.blog.index');
        Route::get('/create', 'App\Http\Controllers\Admin\Blog\CreateController')->name('admin.blog.create');
        Route::post('/', 'App\Http\Controllers\Admin\Blog\StoreController')->name('admin.blog.store');
        Route::get('/{post}', 'App\Http\Controllers\Admin\Blog\ShowController')->name('admin.blog.show');
        Route::get('/{post}/edit', 'App\Http\Controllers\Admin\Blog\EditController')->name('admin.blog.edit');
        Route::patch('/{post}', 'App\Http\Controllers\Admin\Blog\UpdateController')->name('admin.blog.update');
        Route::delete('/{post}', 'App\Http\Controllers\Admin\Blog\DeleteController')->name('admin.blog.delete');
    });

    Route::group(['prefix' => 'student'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Student\IndexController')->name('admin.student.index');
        Route::get('/{student}', 'App\Http\Controllers\Admin\Student\ShowController')->name('admin.student.show');
        Route::get('/{student}/edit', 'App\Http\Controllers\Admin\Student\EditController')->name('admin.student.edit');
        Route::patch('/{student}', 'App\Http\Controllers\Admin\Student\UpdateController')->name('admin.student.update');
    });

    Route::group(['prefix' => 'teacher'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\Teacher\IndexController')->name('admin.teacher.index');
        Route::get('/{teacher}', 'App\Http\Controllers\Admin\Teacher\ShowController')->name('admin.teacher.show');
        Route::get('/{teacher}/edit', 'App\Http\Controllers\Admin\Teacher\EditController')->name('admin.teacher.edit');
        Route::patch('/{teacher}', 'App\Http\Controllers\Admin\Teacher\UpdateController')->name('admin.teacher.update');
    });
});

Auth::routes(['verify' => true]);
