<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'employee'], function () {
    Route::get('/employee_dashboard', function (\Illuminate\Http\Request $request) {
        $work = count(\App\assign_task::where("e_id",$request->session()->get("employee_id"))->get());
        $leave= count(\App\leave::where("employee_id",$request->session()->get("employee_id"))->get());
        return view('employee.index',compact("leave",'work')); //welcome
    });
    Route::get("/employee/check_task", "EmployeeController@check_task_list")->name("employee.check_task_list");
    Route::get("/employee/assign_task_list/{id}", "EmployeeController@assign_task_form")->name("assign_task_list");
    Route::get("/attendence/give_attendence", "AttendenceController@attendence_give_attendence")->name("attendence.give_attendence");
    Route::post("/attendence/give_attendence", "AttendenceController@store")->name("attendence.store_attendence");
    Route::get("/attendence/give_attendence_list", "AttendenceController@give_attendence_list")->name("attendence.give_attendence_list");
    Route::get("/leave/apply_leave", "LeaveController@apply_leave")->name("leave.apply_leave");
    Route::post("/leave/apply_leave", "LeaveController@store")->name("leave.store_apply_leave");
    Route::get("/leave/apply_leave_list", "LeaveController@apply_leave_list")->name("leave.apply_leave_list");
    Route::get("/employee/logout", "authentication@logout_employee")->name("employee.logout");
    Route::get("/task/approve/{id}/{key}", "AssignTaskController@approve")->name("leave.approve");
});
Route::get("/admin", "authentication@index_admin");
Route::post("/admin/submitLogin", "authentication@submit_admin")->name("admin.check");
Route::post("/employee/submitLogin", "authentication@submit_employee")->name("employee.check");

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', function (\Illuminate\Http\Request $request) {
        $work = count(\App\assign_task::all());
        $leave= count(\App\leave::all());
        return view('index',compact("leave",'work')); //welcome
    });

    Route::get("/add_new_employee", "EmployeeController@index");
    Route::get("/employee/assign_task", "EmployeeController@assign_task_list")->name("employee.task_list");
    Route::get("/employee/assign_task_list/{id}", "EmployeeController@assign_task_form")->name("assign_task_list");

    Route::get("/employee/list", "EmployeeController@employee_list")->name("employee.list");
    Route::resource("employee", "EmployeeController");
    Route::get("/attendence/list", "AttendenceController@attendence_list")->name("attendence.list");
    Route::post("/attendence/search", "AttendenceController@search")->name("attendence.search");


    Route::resource("assignTask", "AssignTaskController");
    Route::resource("attendence", "AttendenceController");
    Route::get("/leave/approve_list", "LeaveController@approve_list")->name("leave.approve_list");
    Route::get("/leave/approve/{id}/{key}", "LeaveController@approve")->name("leave.approve");
    Route::get("/admin/logout", "authentication@logout")->name("admin.logout");

});

Route::get("/employee_login", "authentication@index_employee");

