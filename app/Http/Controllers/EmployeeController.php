<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("add_new_employee");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $employee = new employee();
        $employee->first_name = $request->input("first_name");
        $employee->last_name = $request->input("last_name");
        $employee->designation = $request->input("designation");
        $employee->gender = $request->input("gender");
        $employee->city = $request->input("city");
        $employee->email = $request->input("email");$employee->password = $request->input("password");
        $employee->details = $request->input("details");
        $employee->joindate = $request->input("joindate");
        $employee->salary = $request->input("salary");
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move('uploads/banner/', $filename);
            $employee->img = $filename;
        }
        $employee->save();

        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );


        return  redirect("/employee")->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
    public function employee_list(){
        $employee_list = employee::orderBy('id','desc')->get();
        return view("employee_list",compact("employee_list"));
    }
    public function assign_task_list(){
        $employee_list = employee::orderBy('id','desc')->get();
        return view("task_list",compact("employee_list"));
    }
    public function check_task_list(Request $request){

        $assign_task =  DB::table("employees")
            ->join("assign_tasks","assign_tasks.e_id","employees.id")
            ->where("employees.id",$request->session()->get("employee_id"))->get();
        return view("employee.assign_task_list",compact("assign_task"));
    }
    public function assign_task_form($id){
        $employee = employee::find($id);
        return view("assign_task_form",compact("employee"));

    }
}
