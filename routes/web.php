<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Contacts\CreateContactController;
use App\Http\Controllers\Web\Contacts\DeleteContactController;
use App\Http\Controllers\Web\Contacts\EditContactController;
use App\Http\Controllers\Web\Contacts\GetAllContactsController;
use App\Http\Controllers\Web\Contacts\StoreContactController;
use App\Http\Controllers\Web\Contacts\UpdateContactController;
use App\Http\Controllers\Web\Notices\CreateNoticeController;
use App\Http\Controllers\Web\Notices\DeleteNoticeController;
use App\Http\Controllers\Web\Notices\EditNoticeController;
use App\Http\Controllers\Web\Notices\GetAllNoticesController;
use App\Http\Controllers\Web\Notices\StoreNoticeController;
use App\Http\Controllers\Web\Notices\UpdateNoticeController;
use App\Http\Controllers\Web\Tasks\CreateTaskController;
use App\Http\Controllers\Web\Tasks\EditTaskController;
use App\Http\Controllers\Web\Tasks\StoreTaskController;
use App\Http\Controllers\Web\Tasks\GetAllTasksController;
use App\Http\Controllers\Web\Tasks\UpdateTaskController;
use App\Http\Controllers\Web\Users\CreateUserController;
use App\Http\Controllers\Web\Users\StoreUserController;
use Illuminate\Support\Facades\Route;


/*---------------------------------------------------------------------------
Notices
-----------------------------------------------------------------------------*/
Route::get('notices', GetAllNoticesController::class);
Route::get('notices/create', CreateNoticeController::class);
Route::post('notices/store', StoreNoticeController::class);
Route::get('notices/{noticeId}/edit', EditNoticeController::class);
Route::put('notices/{noticeId}', UpdateNoticeController::class);
Route::delete('notices/{noticeId}', DeleteNoticeController::class);

/*---------------------------------------------------------------------------
Contacts
-----------------------------------------------------------------------------*/
Route::get('contacts', GetAllContactsController::class);
Route::get('contacts/create', CreateContactController::class);
Route::post('contacts/store', StoreContactController::class);
Route::get('contacts/{contactId}/edit', EditContactController::class);
Route::put('contacts/{contactId}', UpdateContactController::class);
Route::delete('contacts/{contactId}', DeleteContactController::class);

/*---------------------------------------------------------------------------
Tasks
-----------------------------------------------------------------------------*/
Route::get('tasks', GetAllTasksController::class);
Route::get('tasks/create', CreateTaskController::class);
Route::post('tasks/store', StoreTaskController::class);
Route::get('tasks/{taskId}/edit', EditTaskController::class);
Route::put('tasks/{taskId}', UpdateTaskController::class);

/*---------------------------------------------------------------------------
Users
-----------------------------------------------------------------------------*/
Route::get('users', CreateUserController::class);
Route::post('users', StoreUserController::class);























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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
