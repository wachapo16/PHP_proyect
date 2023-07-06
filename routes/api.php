<?php

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


// Endpoint para crear un aviso
Route::post('1.0/notices', function (Request $request) {
    $title = $request->get('title');
    $content = $request->get('content');
    Notice::create([
        'title' => $title,
        'content' => $content
    ]);
    return response()->json([
        'message' => 'Aviso creado.'
    ]);
});

// Endpoint para obtener todos los avisos
Route::get('1.0/notices', function () {
    $notices = Notice::all(['id', 'title', 'content']);
    return response()->json($notices);
});

// PUT => Actualizar un recurso

Route::put('1.0/notices/{noticeId}', function (int $noticeId, Request $request) {

    $newTitle = $request->get('title');
    $newContent = $request->get('content');

    $notice = Notice::find($noticeId);
    $notice->title = $newTitle;
    $notice->content = $newContent;
    $notice->save();

    return response()->json([
        'message' => 'Aviso actualizado'
    ]);
});

// DELETE => Eliminar un recurso
Route::delete('1.0/notices/{noticeId}', function (int $noticeId) {

    Notice::destroy($noticeId);

    return response()->json([
        'message' => 'Aviso eliminado'
    ]);
});

// Endpoint para obtener todos los contactos
Route::get('1.0/contacts', function () {
    $contacts = Contact::all(['id', 'name', 'cellphone']);
    return response()->json($contacts);
});

// Endpoint para crear un Contacto
Route::post('1.0/contacts', function (Request $request) {
    $name = $request->get('name');
    $cellPhone = $request->get('cellphone');

    Contact::create([
        'name' => $name,
        'cellphone' => $cellPhone
    ]);
    return response()->json([
        'message' => 'Contacto creado.'
    ]);
});

// PUT => Actualizar un Contacto

Route::put('1.0/contacts/{contactId}', function (int $contactId, Request $request) {

    $newName = $request->get('name');
    $newCellPhone = $request->get('cellPhone');

    $contacts = Contact::find($contactId);
    $contacts->title = $newName;
    $contacts->content = $newCellPhone;
    $contacts->save();

    return response()->json([
        'message' => 'Aviso actualizado'
    ]);
});

/*____________________________________________________________________
TASKS
_____________________________________________________________________*/
// DELETE => Eliminar una tarea
Route::delete('1.0/tasks/{taskId}', [DeleteTaskController::class, 'deleteTask']);

//PUT => Actualizar estado de la tarea:
/*Por hacer --> En progreso
En progreso --> Finalizada*/
Route::put('1.0/tasks/{taskId}', [UpdateStateController::class, 'updateState']);

/*____________________________________________________________________
USERS
_____________________________________________________________________*/
Route::delete('1.0/users/{userId}', [DeleteUserController::class, 'deleteUser']);