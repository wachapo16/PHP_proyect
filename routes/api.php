<?php

use App\Http\Controllers\Api\Contacts\CreateContactController;
use App\Http\Controllers\Api\Contacts\GetAllContactController;
use App\Http\Controllers\Api\Contacts\UpdateContactController;
use App\Http\Controllers\Api\Notices\CreateNoticeController;
use App\Http\Controllers\Api\Notices\GetAllNoticeController;
use App\Http\Controllers\Api\Notices\UpdateNoticeController;
use App\Http\Controllers\Api\Tasks\DeleteTaskController;
use App\Http\Controllers\Api\Tasks\UpdateStateController;
use App\Http\Controllers\Api\Users\DeleteUserController;
use App\Models\Contact;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*____________________________________________________________________
NOTICES
____________________________________________________________________*/
Route::post('1.0/notices', [CreateNoticeController::class, 'createNotice'] );
Route::get('1.0/notices', [GetAllNoticeController::class, 'getNotice']);
Route::put('1.0/notices/{noticeId}', [UpdateNoticeController::class, 'updateNotice']);
Route::delete('1.0/notices/{noticeId}', function (int $noticeId) {

    Notice::destroy($noticeId);

    return response()->json([
        'message' => 'Aviso eliminado'
    ]);
});

/*____________________________________________________________________
CONTACTS
____________________________________________________________________*/
Route::get('1.0/contacts', [GetAllContactController::class, 'getContact']);
Route::post('1.0/contacts', [CreateContactController::class, 'createContact']);
Route::put('1.0/contacts/{contactId}', [UpdateContactController::class, 'updateContact']);

/*____________________________________________________________________
TASKS
____________________________________________________________________*/
Route::delete('1.0/tasks/{taskId}', [DeleteTaskController::class, 'deleteTask']);
//PUT => Actualizar estado de la tarea: Por hacer --> En progreso En progreso --> Finalizada
Route::put('1.0/tasks/{taskId}', [UpdateStateController::class, 'updateState']);

/*____________________________________________________________________
USERS
_____________________________________________________________________*/
Route::delete('1.0/users/{userId}', [DeleteUserController::class, 'deleteUser']);
