<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud2Controller;

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

Route::get("/",[Crud2Controller::class,"index"]);

Route::get("/create",[Crud2Controller::class,"create"])->name("create");
Route::post("/create",[Crud2Controller::class,"store"])->name("store");

Route::get("/check",[Crud2Controller::class,"check"])->name("check");
// Route::get("/dashboard",[Crud2Controller::class,"dashboard"])->name("dashboard");

Route::post("/destroy",[Crud2Controller::class,"destroy"])->name("destroy");
Route::get("/delete",[Crud2Controller::class,"delete"])->name("delete");

Route::post("/update",[Crud2Controller::class,"update"])->name("update");
Route::get("/update1",[Crud2Controller::class,"update1"])->name("update1");