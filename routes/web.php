<?php

use App\Http\Controllers\Web\Auth\AuthenticationController;
use App\Http\Controllers\web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\CreateAccountController;
use App\Http\Controllers\Web\Auth\LogoutController;
use App\Http\Controllers\Web\Auth\RegisterController;
use App\Http\Controllers\Web\Cart\AddProductController;
use App\Http\Controllers\Web\Cart\RemoveProductController;
use App\Http\Controllers\Web\Contacts\CreateContactController;
use App\Http\Controllers\Web\Contacts\DeleteContactController;
use App\Http\Controllers\Web\Contacts\EditContactController;
use App\Http\Controllers\Web\Contacts\GetAllContactsController;
use App\Http\Controllers\Web\Contacts\StoreContactController;
use App\Http\Controllers\Web\Contacts\UpdateContactController;
use App\Http\Controllers\Web\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // Rutas protegidas que requieren autenticación
});


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

/*---------------------------------------------------------------------------
Auth
-----------------------------------------------------------------------------*/
Route::get('register', RegisterController::class);
Route::post('register', CreateAccountController::class);
Route::get('login', LoginController::class);
Route::post('login', AuthenticationController::class);
Route::post('logout', LogoutController::class);
Route::get('home', HomeController::class);

/*---------------------------------------------------------------------------
Cart
-----------------------------------------------------------------------------*/
Route::post('cart/add', AddProductController::class);
Route::delete('cart/remove', RemoveProductController::class);







