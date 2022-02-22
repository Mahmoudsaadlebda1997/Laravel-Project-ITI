<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Laravel\Sanctum\Sanctum;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});





Route::get('posts',[PostController::class,'index'])->middleware('auth:sanctum');
Route::get('posts/{id}',[PostController::class,'show'])->middleware('auth:sanctum');
Route::post('posts',[PostController::class,'store'])->middleware('auth:sanctum');
Route::put('posts/{id}',[PostController::class,'update'])->middleware('auth:sanctum');
Route::delete('posts/{id}',[PostController::class,'destroy'])->middleware('auth:sanctum');


Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);










