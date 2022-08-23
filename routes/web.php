<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RegController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;

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
Route::get('/', [HomeController::class, 'index']);
Route::post('/reg', [RegController::class, 'register']);
Route::post('/studentlogin_check', [AuthController::class, 'check']);
Route::post('/clublogin_check', [AuthController::class, 'clubcheck']);
Route::post('/adminlogin_check', [AuthController::class, 'admincheck']);
Route::get('/studentlogout', [AuthController::class, 'st_logout']);
Route::get('/adminlogin', [AuthController::class, 'adminlogin']);
Route::get('/clublogin', [AuthController::class, 'clublogin']);
Route::get('/departmentlogin', [AuthController::class, 'departmentlogin']);
Route::post('/departmentlogin_check', [AuthController::class, 'departmentcheck']);
Route::get('/dept_event_create', [AuthController::class, 'dept_event_create']);
Route::post('/dept_event', [AuthController::class, 'dept_event_store']);
Route::get('/departmentlogout', [AuthController::class, 'dept_logout']);
Route::get('/participate', [AuthController::class, 'participate']);
Route::post('/participate_store', [AuthController::class, 'participate_store']);
Route::get('/feedback', [AuthController::class, 'feedback']);
Route::post('/feedback_store', [AuthController::class, 'feedback_store']);
Route::get('/roomstatus', [AuthController::class, 'roomstatus']);
Route::get('/admindashboard', [AuthController::class, 'admin_dash']);
Route::get('/admin_request', [AuthController::class, 'admin_request']);
Route::get('/admin_request_delete/{id}', [AuthController::class, 'admin_request_delete']);
Route::get('/admin_request_add/{id}', [AuthController::class, 'admin_request_add']);
Route::get('/contact', [AuthController::class, 'contact']);
Route::post('/contact_store', [AuthController::class, 'contact_store']);
Route::get('/University_Event', [AuthController::class, 'University_Event']);
Route::get('/feedback_list', [AuthController::class, 'feedback_list']);
Route::get('/department_dashboard', [AuthController::class, 'department_dashboard']);
Route::get('/audi_request', [AuthController::class, 'audi_request']);
Route::post('/audi_request_store', [AuthController::class, 'audi_request_store']);
Route::get('/transport', [AuthController::class, 'transport']);
Route::post('/transport_store', [AuthController::class, 'transport_store']);
Route::get('/dept_room', [AuthController::class, 'dept_room']);
Route::post('/dept_room_store', [AuthController::class, 'dept_room_store']);
Route::get('/clubdashboard', [AuthController::class, 'clubdashboard']);
Route::get('/club_event', [AuthController::class, 'club_event']);
Route::post('/club_event_store', [AuthController::class, 'club_event_store']);
Route::get('/club_room', [AuthController::class, 'club_room']);
Route::get('/club_sound', [AuthController::class, 'club_sound']);
Route::post('/club_sound_store', [AuthController::class, 'club_sound_store']);
Route::post('/club_room_store', [AuthController::class, 'club_room_store']);
Route::get('/ocalogin', [AuthController::class, 'ocalogin']);
Route::post('/ocalogin_check', [AuthController::class, 'ocalogin_check']);
Route::get('/ocadashboard', [AuthController::class, 'ocadashboard']);
Route::get('/oca_sound', [AuthController::class, 'oca_sound']);
Route::get('/oca_transport', [AuthController::class, 'oca_transport']);
Route::get('/oca_rooms', [AuthController::class, 'oca_rooms']);
Route::get('/oca_sound_delete/{id}', [AuthController::class, 'oca_sound_delete']);
Route::get('/oca_sound_add/{id}', [AuthController::class, 'oca_sound_add']);
Route::get('/oca_transport_delete/{id}', [AuthController::class, 'oca_transport_delete']);
Route::get('/oca_transport_add/{id}', [AuthController::class, 'oca_transport_add']);
Route::get('/oca_st', [AuthController::class, 'oca_st']);
Route::get('/oca_st_delete/{id}', [AuthController::class, 'oca_st_delete']);
Route::get('/message', [AuthController::class, 'message']);
Route::get('/message_delete/{id}', [AuthController::class, 'message_delete']);
Route::get('/oca_rooms', [AuthController::class, 'oca_rooms']);
Route::get('/oca_rooms_delete/{id}', [AuthController::class, 'oca_rooms_delete']);
Route::get('/oca_rooms_add/{id}', [AuthController::class, 'oca_rooms_add']);
Route::get('/clublogout', [AuthController::class, 'club_logout']);
Route::get('/ocalogout', [AuthController::class, 'oca_logout']);
Route::get('/adminlogout', [AuthController::class, 'admin_logout']);
Route::get('/event', [AuthController::class, 'event']);
Route::get('/about', [AuthController::class, 'about']);



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/reg', [RegController::class, 'index']);
    Route::get('/studentlogin', [AuthController::class, 'login']);
    Route::get('/studentdashboard', [AuthController::class, 'st_dash']);
});


