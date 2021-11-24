<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CoursesinprogramsController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\FacultysController;
use App\Http\Controllers\LicensesController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\VirtualLicensesController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("Classrooms",[ClassroomsController::class,"index"]);
Route::post("Classrooms",[ClassroomsController::class,"store"]);
Route::put("Classrooms",[ClassroomsController::class,"update"]);
Route::delete("Classrooms/{id}",[ClassroomsController::class,"destroy"]);

Route::get("Courses",[CoursesController::class,"index"]);
Route::post("Courses",[CoursesController::class,"store"]);
Route::put("Courses",[CoursesController::class,"update"]);
Route::delete("Courses/{id}",[CoursesController::class,"destroy"]);

Route::get("Coursesinprograms",[CoursesinprogramsController::class,"index"]);
Route::post("Coursesinprograms",[CoursesinprogramsController::class,"store"]);
Route::put("Coursesinprograms",[CoursesinprogramsController::class,"update"]);
Route::delete("Coursesinprograms/{id}",[CoursesinprogramsController::class,"destroy"]);

Route::get("Enrollments",[EnrollmentsController::class,"index"]);
Route::post("Enrollments",[EnrollmentsController::class,"store"]);
Route::put("Enrollments",[EnrollmentsController::class,"update"]);
Route::delete("Enrollments/{id}",[EnrollmentsController::class,"destroy"]);

Route::get("Facultys",[FacultysController::class,"index"]);
Route::post("Facultys",[FacultysController::class,"store"]);
Route::put("Facultys",[Facultys::class,"update"]);
Route::delete("Facultys/{id}",[Facultys::class,"destroy"]);

Route::get("Licenses",[LicensesController::class,"index"]);
Route::post("Licenses",[LicensesController::class,"store"]);
Route::put("Licenses",[LicensesController::class,"update"]);
Route::delete("Licenses/{id}",[LicensesController::class,"destroy"]);

Route::get("Programs",[ProgramsController::class,"index"]);
Route::post("Programs",[ProgramsController::class,"store"]);
Route::put("Programs",[ProgramsController::class,"update"]);
Route::delete("Programs/{id}",[ProgramsController::class,"destroy"]);

Route::get("Roles",[RolesController::class,"index"]);
Route::post("Roles",[RolesController::class,"store"]);
Route::put("Roles",[RolesController::class,"update"]);
Route::delete("Roles/{id}",[RolesController::class,"destroy"]);

Route::get("Schedule",[ScheduleController::class,"index"]);
Route::post("Schedule",[ScheduleController::class,"store"]);
Route::put("Schedule",[ScheduleController::class,"update"]);
Route::delete("Schedule/{id}",[ScheduleController::class,"destroy"]);

Route::get("Typeclassroom",[TypeclassroomController::class,"index"]);
Route::post("Typeclassroom",[TypeclassroomController::class,"store"]);
Route::put("Typeclassroom",[TypeclassroomController::class,"update"]);
Route::delete("Typeclassroom/{id}",[TypeclassroomController::class,"destroy"]);

Route::get("Virtuallicense", [VirtualLicensesController::class, "index"]);
Route::post("Virtuallicense", [VirtualLicensesController::class, "store"]);
Route::put("Virtuallicense",[VirtualLicensesController::class,"update"]);
Route::delete("Virtuallicense", [VirtualLicensesController::class, "destroy"]);
